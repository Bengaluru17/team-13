package com.example.vibha.kshamataapp;

import android.Manifest;
import android.content.Intent;
import android.media.MediaPlayer;
import android.media.MediaRecorder;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;

public class trackingWomenForm extends AppCompatActivity {
//MainActivity mw=new MainActivity();
private static final String LOG_TAG = "AudioRecordTest";
    private static final int REQUEST_RECORD_AUDIO_PERMISSION = 200;
    private static String mFileName = null;
    private boolean permissionToRecordAccepted = false;
    private String[] permissions = {Manifest.permission.RECORD_AUDIO};
    private MediaRecorder mRecorder = null;
    private MediaPlayer mPlayer = null;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tracking_women_form);

    }
    public void onclickTrackingWomenForm(View view){
        Intent intent = new Intent(this, activity2.class);
        startActivity(intent);
    }

    public void record(View view) {
    Intent int1=new Intent(getApplicationContext(),recording.class);
        startActivity(int1);
    }
}
