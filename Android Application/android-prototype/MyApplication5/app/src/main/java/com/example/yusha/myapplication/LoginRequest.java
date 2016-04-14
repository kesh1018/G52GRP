package com.example.yusha.myapplication;

/**
 * Created by yusha on 11/04/2016.
 */
import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

public class LoginRequest extends StringRequest {
    private static final String LOGIN_REQUEST_URL = "http://10.0.2.2/login-app/login.php";
    private Map<String, String> params;

    public LoginRequest(String user_email, String user_password, Response.Listener<String> listener) {
        super(Method.POST, LOGIN_REQUEST_URL, listener, null);
        params = new HashMap<>();
        params.put("user_email", user_email);
        params.put("user_password", user_password);
    }

    @Override
    public Map<String, String> getParams() {
        return params;
    }
}