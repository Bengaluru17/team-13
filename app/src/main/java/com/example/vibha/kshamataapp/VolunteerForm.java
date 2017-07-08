package com.example.vibha.kshamataapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class VolunteerForm extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_volunteer_form);
    }

    public void trackingWomenPage(View view){
        Intent intent = new Intent(this, trackingWomenForm.class);
        startActivity(intent);
    }

    public void trackingActivityPage(View view){
        Intent intent = new Intent(this, trackingActivityForm.class);
        startActivity(intent);
    }
}
