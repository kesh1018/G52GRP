package com.example.yusha.myapplication;

import android.test.ActivityInstrumentationTestCase2;
import android.test.suitebuilder.annotation.SmallTest;
import android.widget.TextView;

/**
 * Created by yusha on 14/04/2016.
 */
public class MainActivityTest extends ActivityInstrumentationTestCase2<MainActivity> {

    MainActivity activity;

    public MainActivityTest(){
        super(MainActivity.class);
    }

    @Override
    protected void setUp() throws Exception{
        super.setUp();;
        activity = getActivity();
    }

    @SmallTest
    public void textTextViewNotNull(){
        TextView textView = (TextView)activity.findViewById(R.id.viewName);
        assertNotNull(textView);
    }
}
