package com.example.si_peka.adapter;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.recyclerview.widget.RecyclerView;

import com.example.si_peka.R;

import java.util.ArrayList;
import java.util.List;

/**
 * Created by Ujang Wahyu on 24/01/2017.
 */

public class GridAdapter extends RecyclerView.Adapter<GridAdapter.ViewHolder> {

    List<EndangeredItem> mItems;

    public GridAdapter() {
        super();
        mItems = new ArrayList<EndangeredItem>();
        EndangeredItem nama = new EndangeredItem();
        nama.setName("Sawi");
        nama.setPrice("10.000");
        nama.setThumbnail(R.drawable.sayur1);
        mItems.add(nama);

        nama = new EndangeredItem();
        nama.setName("Wortel");
        nama.setPrice("10.000");
        nama.setThumbnail(R.drawable.sayur2);
        mItems.add(nama);

        nama = new EndangeredItem();
        nama.setName("Terong");
        nama.setPrice("10.000");
        nama.setThumbnail(R.drawable.sayur3);
        mItems.add(nama);

        nama = new EndangeredItem();
        nama.setName("Bayam");
        nama.setPrice("10.000");
        nama.setThumbnail(R.drawable.sayur4);
        mItems.add(nama);

        nama = new EndangeredItem();
        nama.setName("Kacang Tanah");
        nama.setPrice("10.000");
        nama.setThumbnail(R.drawable.sayur5);
        mItems.add(nama);

        nama = new EndangeredItem();
        nama.setName("Tomat");
        nama.setPrice("10.000");
        nama.setThumbnail(R.drawable.sayur6);
        mItems.add(nama);


    }

    @Override
    public ViewHolder onCreateViewHolder(ViewGroup viewGroup, int i) {
        View v = LayoutInflater.from(viewGroup.getContext())
                .inflate(R.layout.grid_view, viewGroup, false);
        ViewHolder viewHolder = new ViewHolder(v);
        return viewHolder;
    }

    @Override
    public void onBindViewHolder(ViewHolder viewHolder, int i) {
        EndangeredItem nature = mItems.get(i);
        viewHolder.tvspecies.setText(nature.getName());
        viewHolder.price.setText(nature.getPrice());
        viewHolder.imgThumbnail.setImageResource(nature.getThumbnail());
    }

    @Override
    public int getItemCount() {

        return mItems.size();
    }

    class ViewHolder extends RecyclerView.ViewHolder  {


        public ImageView imgThumbnail;
        public TextView tvspecies;
        public TextView price;

        public ViewHolder(View itemView) {
            super(itemView);
            imgThumbnail = (ImageView)itemView.findViewById(R.id.img_thumbnail);
            tvspecies = (TextView)itemView.findViewById(R.id.status);
            price = (TextView)itemView.findViewById(R.id.price);

        }
    }
}
