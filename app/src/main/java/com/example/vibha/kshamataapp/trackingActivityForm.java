package com.example.vibha.kshamataapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class trackingActivityForm extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tracking_form);
    }

    public void onclickActivityForm(View view){
        Intent intent = new Intent(this, trackingActivityFormPage2.class);
        startActivity(intent);
    }


}
