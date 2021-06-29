package com.example.si_peka;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class LoginActivity extends AppCompatActivity {

    EditText username,password;
    Button login;
    private Object MainActivity;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        username = (EditText) findViewById(R.id.username);
        password = (EditText) findViewById(R.id.password);
        login = (Button) findViewById(R.id.btnLogin);

        login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(!username.getText().toString().equals("")){
                    if(!password.getText().toString().equals("")){
                        if (username.getText().toString().equals("Rhizki")){
                            if (password.getText().toString().equals("kepo")){
                                Intent intent = new Intent(LoginActivity.this, MainActivity.class);
//                                Intent goMain = new Intent(LoginActivity.this.MainActivity.class);
                                startActivity(intent);
                            }else {
                                Toast.makeText(getApplicationContext(), "password salah",Toast.LENGTH_LONG);
                            }
                        }else{
                            Toast.makeText(getApplicationContext(),"username salah",Toast.LENGTH_LONG).show();
                        }
                    }else{
                        Toast.makeText(getApplicationContext(),"password wajib diisi",Toast.LENGTH_LONG).show();
                    }
                }else{
                    Toast.makeText(getApplicationContext(),"username wajib diisi",Toast.LENGTH_LONG).show();
                }
            }

        }) ;

    }
}