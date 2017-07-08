package com.example.vibha.kshamataapp;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.EditText;

public class loginPage extends AppCompatActivity {
EditText et1,et2;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login_page);
et1= (EditText) findViewById(R.id.usernameText);
        et2=(EditText)findViewById(R.id.passwordText);
    }

    public void login(View view) {
        String name = et1.getText().toString();
        String pwd = et2.getText().toString();
        String type = "login";
        Bw bw = new Bw(this);
        bw.execute(type, name, pwd);
        if (bw.ad1==0){
            Intent int1=new Intent(this,VolunteerForm.class);
        startActivity(int1);
        }
    }
}
