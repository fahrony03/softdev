package com.example.si_peka.ui.cart;

import android.annotation.SuppressLint;
import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.BaseAdapter;
import android.widget.GridView;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;

import com.example.si_peka.GridItemActivity;
import com.example.si_peka.R;
import com.example.si_peka.databinding.FragmentCartBinding;

public class CartFragment extends Fragment {

    //    private CartViewModel cartViewModel;
    private FragmentCartBinding binding;
    private GridItemActivity gridItemActivity;

    GridView gridView;
    String[] sayurNames = {"Sayur1", "Sayur2", "Sayur3", "Sayur4", "Sayur5", "Sayur6"};
    int[] sayurImages = {R.drawable.sayur1, R.drawable.sayur2, R.drawable.sayur3, R.drawable.sayur4, R.drawable.sayur5, R.drawable.sayur6,};


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.fragment_cart);

        gridView = gridView.findViewById(R.id.gridview);

        CustomAdapter customAdapter = new CustomAdapter();
        gridView.setAdapter(customAdapter);

        gridView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int i, long i) {
                Intent intent = new Intent(gridItemActivity.getApplicationContext(), GridItemActivity.class);
                intent.putExtra("name", sayurNames[i]);
                intent.putExtra("image", sayurImages[i]);
                startActivity(intent);
            }
        });
    }

    private class CustomAdapter extends BaseAdapter {
        @Override
        public int getCount() {
            return sayurImages.length;
        }

        @Override
        public Object getItem(int i) {
            return null;
        }

        @Override
        public long getItemId(int i) {
            return 0;
        }

        @Override
        public View getView(int i, View convertView, ViewGroup parent) {
            View view = getLayoutInflater().inflate(R.layout.baris_data, null);

            TextView name = view.findViewById(R.id.sayur);
            ImageView image = view.findViewById(R.id.image);

            name.setText(sayurNames[i]);
            image.setImageResource(sayurImages[i]);
            return view;
        }
    }
}