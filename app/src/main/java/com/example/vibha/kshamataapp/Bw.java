package com.example.vibha.kshamataapp;

import android.app.AlertDialog;
import android.content.Context;
import android.os.AsyncTask;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLEncoder;

/**
 * Created by Larika on 19-05-2017.
 */
public class Bw extends AsyncTask<String,Void,String> {
AlertDialog ad;
    Context context;
    public static int ad1;
    Bw(Context ctx)
    {
context=ctx
 ;   }
    @Override
    protected String doInBackground(String...params) {
        String un=params[1];
        String pwd=params[2];
        String type=params[0];
       // String mobile=params[3];
        //int mob=Integer.parseInt(mobile);
        String login_url="https://madhupriyaks05.000webhostapp.com/login_return.php";
        //String register_url="http://192.168.1.103/sign_up.php";
        if(type.equals("login"))
        {
            try {
                URL url=new URL(login_url);
                HttpURLConnection con= (HttpURLConnection) url.openConnection();
                con.setRequestMethod("POST");
                con.setDoOutput(true);
                con.setDoInput(true);
                OutputStream os=con.getOutputStream();
                BufferedWriter buf=new BufferedWriter(new OutputStreamWriter(os,"UTF-8"));
                String post_data= URLEncoder.encode("user_name","UTF-8")+"="+ URLEncoder.encode(un,"UTF-8")+"&"
                        + URLEncoder.encode("password","UTF-8")+"="+ URLEncoder.encode(pwd,"UTF-8");
                buf.write(post_data);
                buf.flush();
                buf.close();
                os.close();
                InputStream is=con.getInputStream();
                BufferedReader buf1=new BufferedReader(new InputStreamReader(is,"iso-8859-1"));
                String result="";
                String line="";
                while((line=buf1.readLine())!= null) {
                    result += line;
                }
if(pwd.equals("admin"))
    ad1=1;
//Log.e("admin","hello");
                con.disconnect();
                return result;
            } catch (MalformedURLException e) {
                e.printStackTrace();
            } catch (IOException e) {
                e.printStackTrace();
            }
        }       return null;
    }

    @Override
    protected void onPostExecute(String res) {
        ad.setMessage(res);
        ad.show();
        // super.onPostExecute(aVoid);
    }

    @Override
    protected void onPreExecute() {
        ad=new AlertDialog.Builder(context).create();
        ad.setTitle("login");
        // super.onPreExecute();
    }
}
