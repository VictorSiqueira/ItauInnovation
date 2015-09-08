package com.example.victor.itauuniversity;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.preference.PreferenceManager;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Toast;

public class MainActivity extends Activity {

    private WebView mWebView;
    private AlertDialog alerta;
    private SharedPreferences sp;
    private SharedPreferences.Editor spEdit;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        sp = PreferenceManager.getDefaultSharedPreferences(this);
        spEdit = sp.edit();

        //edtNome.setText( sp.getString("nome", "") );
        if (sp.contains("access_token")){

        }else{
            ex();
        }

        String url = "http://victorsiqueira.esy.es/ItauUniversity/index.html";
        mWebView = (WebView) findViewById(R.id.activity_main_webview);


        mWebView.getSettings().setJavaScriptEnabled(true);
        mWebView.setWebViewClient(new WebViewClient());
        mWebView.loadUrl(url);

    }

    private void ex(){
        //Cria o gerador do AlertDialog
        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        //define o titulo
        builder.setTitle("Bem vindo!");
        // define a mensagem
        builder.setMessage("Este aplicativo, é um PROTÓTIPO participante de uma competição universitária, o uso da marca ITAÚ é ilustrativo, ou seja, sem fins lucrativos \n" +
                "\n Se está de acordo e compreende o que foi citado acima, por favor, continue!");
        //define um botão como positivo
        builder.setPositiveButton("Concordo", new DialogInterface.OnClickListener() {
            public void onClick(DialogInterface arg0, int arg1) {
                salvar();
            }
        });

        //define um botão como negativo.
        builder.setNegativeButton("Discordo", new DialogInterface.OnClickListener() {
            public void onClick(DialogInterface arg0, int arg1) {
                finish();
            }
        });
        //cria o AlertDialog
        alerta = builder.create();
        //Exibe
        alerta.show();
    }

    public void salvar(){
        spEdit.putString("access_token", "1");
        spEdit.commit();
    }
}




   /* @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }

    }
*/

