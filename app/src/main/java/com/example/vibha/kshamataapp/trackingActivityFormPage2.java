package com.example.vibha.kshamataapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class trackingActivityFormPage2 extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tracking_form_page2);
    }

    public void onclickActivityFormPage2(View view){
        Intent intent = new Intent(this, trackingActivityFormPage3.class);
        startActivity(intent);
    }
}
