package com.example.yusha.myapplication;

// Taken and edited from android studio default template

import android.app.ProgressDialog;
import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.NavigationView;
import android.support.design.widget.TextInputEditText;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.MotionEvent;
import android.view.View;
import android.view.inputmethod.InputMethodManager;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Hashtable;
import java.util.Map;


public class MainActivity extends AppCompatActivity
        implements NavigationView.OnNavigationItemSelectedListener, View.OnClickListener {

    private TextInputEditText editTextName, editTextID, editTextGender, editTextAddress, editTextRace, editTextReg_Num, editDate, editTextRemarks, editTextPhoneNum, editTextReligion, editTextDOB, editTextVehicleType, editTextCheckIn;
    private Spinner spinnerCategory;
    private Button bSubmit;
    private ProgressDialog loading;
    RequestQueue requestQueue;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.drawer_main);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(this, drawer, toolbar, R.string.navigation_drawer_open, R.string.navigation_drawer_close);
        drawer.setDrawerListener(toggle);
        toggle.syncState();

        NavigationView navigationView = (NavigationView) findViewById(R.id.nav_view);
        navigationView.setNavigationItemSelectedListener(this);

        bSubmit = (Button) findViewById(R.id.buttonSubmit);

        editTextName = (TextInputEditText) findViewById(R.id.editName);
        editTextID = (TextInputEditText) findViewById(R.id.editID);
        editTextDOB = (TextInputEditText)findViewById(R.id.editDOB);
        editTextGender = (TextInputEditText) findViewById(R.id.editGender);
        editTextAddress = (TextInputEditText) findViewById(R.id.editAddress);
        editTextRace = (TextInputEditText) findViewById(R.id.editRace);
        editTextReligion = (TextInputEditText) findViewById(R.id.editReligion);
        editTextVehicleType = (TextInputEditText)findViewById(R.id.editVehicleType);
        editTextReg_Num = (TextInputEditText) findViewById(R.id.editRegNum);
        editDate = (TextInputEditText)findViewById(R.id.editDate);
        editTextCheckIn = (TextInputEditText)findViewById(R.id.editCheckInTime);
        editTextRemarks = (TextInputEditText)findViewById(R.id.editRemarks);
        editTextPhoneNum = (TextInputEditText) findViewById(R.id.editPhoneNum);
        spinnerCategory = (Spinner)findViewById(R.id.spinner);

    }

    private void getData() {
        loading = ProgressDialog.show(this, "Please wait...", "Fetching...", false, false);

        String url = Config.DATA_URL+editTextName.getText().toString().trim();

        StringRequest stringRequest = new StringRequest(url, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                loading.dismiss();
                showJSON(response);
            }
        },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Toast.makeText(MainActivity.this,error.getMessage().toString(), Toast.LENGTH_LONG).show();
                    }
                });

        RequestQueue requestQueue = Volley.newRequestQueue(this);
        requestQueue.add(stringRequest);
    }
    private void showJSON(String response){
        String name ="";
        String IC_No ="";
        String DOB = "";
        String gender = "";
        String address = "";
        String race = "";
        String religion = "";
        String contact_no = "";
        String vehicle_type = "";
        String registration_no = "";
        String remarks = "";
        String date = new SimpleDateFormat("yyyy-MM-dd").format(new Date());
        String checkIn = new SimpleDateFormat("HH:mm:ss a").format(new Date());


        try {
            JSONObject jsonObject = new JSONObject(response);
            JSONArray result = jsonObject.getJSONArray(Config.JSON_ARRAY);
            JSONObject visitor = result.getJSONObject(0);

            name = visitor.getString(Config.KEY_NAME);
            IC_No = visitor.getString(Config.KEY_IC_NO);
            DOB  = visitor.getString(Config.KEY_DOB);
            gender = visitor.getString(Config.KEY_GENDER);
            address = visitor.getString(Config.KEY_ADDRESS);
            race = visitor.getString(Config.KEY_RACE);
            religion = visitor.getString(Config.KEY_RELIGION);
            contact_no = visitor.getString(Config.KEY_CONTACT_NO);
            vehicle_type = visitor.getString(Config.KEY_VEHICLE_TYPE);
            registration_no = visitor.getString(Config.KEY_REGISTRATION_NO);
            remarks = visitor.getString(Config.KEY_REMARKS);


        } catch (JSONException e) {
            e.printStackTrace();
        }

        editTextName.setText(name);
        editTextID.setText(IC_No);
        editTextDOB.setText(DOB);
        editTextGender.setText(gender);
        editTextAddress.setText(address);
        editTextRace.setText(race);
        editTextReligion.setText(religion);
        editTextPhoneNum.setText(contact_no);
        editTextVehicleType.setText(vehicle_type);
        editTextReg_Num.setText(registration_no);
        editTextRemarks.setText(remarks);
        editDate.setText(date);
        editTextCheckIn.setText(checkIn);
    }

    private void updateServer(){
        //Showing the progress dialog
        final ProgressDialog loading = ProgressDialog.show(this,"Uploading...","Please wait...",false,false);
        StringRequest stringRequest = new StringRequest(Request.Method.POST, Config.INSERT_URL,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String s) {
                        //Disimissing the progress dialog
                        loading.dismiss();
                        //Showing toast message of the response
                        Toast.makeText(MainActivity.this, s , Toast.LENGTH_LONG).show();
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError volleyError) {
                        //Dismissing the progress dialog
                        loading.dismiss();
                        //Showing toast
                        Toast.makeText(MainActivity.this, volleyError.getMessage().toString(), Toast.LENGTH_LONG).show();
                    }
                }){
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {
                String registration_no = editTextReg_Num.getText().toString().trim();
                String contact_no = editTextPhoneNum.getText().toString().trim();
                String remarks = editTextRemarks.getText().toString().trim();
                String category = spinnerCategory.getSelectedItem().toString();
                String vehicle_type = editTextVehicleType.getText().toString().trim();
                String date = editDate.getText().toString().trim();
                String check_in = editTextCheckIn.getText().toString().trim();

                Map<String,String> params = new Hashtable<String, String>();
                params.put(Config.KEY_REGISTRATION_NO, registration_no);
                params.put(Config.KEY_CONTACT_NO, contact_no);
                params.put(Config.KEY_REMARKS, remarks);
                params.put(Config.KEY_CATEGORY, category);
                params.put(Config.KEY_VEHICLE_TYPE, vehicle_type);
                params.put(Config.KEY_DATE, date);
                params.put(Config.KEY_CHECK_IN, check_in);

                return params;
            }

        };



        RequestQueue requestQueue = Volley.newRequestQueue(this);
        requestQueue.add(stringRequest);
    }

    @Override
    public void onClick(View v) {
        if(v == bSubmit) {
            updateServer();
        }
    }

    @Override
    public void onBackPressed() {
        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        if (drawer.isDrawerOpen(GravityCompat.START)) {
            drawer.closeDrawer(GravityCompat.START);
        } else {
            super.onBackPressed();
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        int id = item.getItemId();
        if (id == R.id.action_logout) {
            Intent intent = new Intent(this, LoginActivity.class);
            startActivity(intent);
            finish();
        }
        return super.onOptionsItemSelected(item);
    }

    @SuppressWarnings("StatementWithEmptyBody")
    @Override
    public boolean onNavigationItemSelected(MenuItem item) {
        int id = item.getItemId();

        if (id == R.id.nav_add) {
            getData();
        }
        else if (id == R.id.nav_remove) {
            editTextName.setText("");
            editTextID.setText("");
            editTextDOB.setText("");
            editTextGender.setText("");
            editTextAddress.setText("");
            editTextRace.setText("");
            editTextReligion.setText("");
            editTextPhoneNum.setText("");
            editTextVehicleType.setText("");
            editTextReg_Num.setText("");
            editTextRemarks.setText("");
        }
        else if (id == R.id.nav_manage) {
        }
        else if (id == R.id.nav_report) {

        }

        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        drawer.closeDrawer(GravityCompat.START);
        return true;
    }

    @Override
    public boolean dispatchTouchEvent(MotionEvent event) {

        View v = getCurrentFocus();
        boolean returnCanvas = super.dispatchTouchEvent(event);

        if (v instanceof EditText) {
            View w = getCurrentFocus();
            int screenCoord[] = new int[2];
            w.getLocationOnScreen(screenCoord);
            float x = event.getRawX() + w.getLeft() - screenCoord[0];
            float y = event.getRawY() + w.getTop() - screenCoord[1];

            Log.d("Activity", "Touch event " + event.getRawX() + "," + event.getRawY() + " " + x + "," + y + " rect " + w.getLeft() + "," + w.getTop() + "," + w.getRight() + "," + w.getBottom() + " coords " + screenCoord[0] + "," + screenCoord[1]);
            if (event.getAction() == MotionEvent.ACTION_UP && (x < w.getLeft() || x >= w.getRight() || y < w.getTop() || y > w.getBottom()) ) {
                InputMethodManager imm = (InputMethodManager)getSystemService(Context.INPUT_METHOD_SERVICE);
                imm.hideSoftInputFromWindow(getWindow().getCurrentFocus().getWindowToken(), 0);
            }
        }
        return returnCanvas;
    }






}
