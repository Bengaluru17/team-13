package com.example.vibha.kshamataapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class activity2 extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_activity2);
    }

    public void onclickTrackingWomenLastPage(View view){
        Intent intent = new Intent(this, activity3.class);
        startActivity(intent);
    }
}
