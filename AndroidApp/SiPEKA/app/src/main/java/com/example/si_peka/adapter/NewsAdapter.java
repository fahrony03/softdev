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

public class NewsAdapter extends RecyclerView.Adapter<NewsAdapter.ViewHolder> {

    List<NewsItem> mItems;

    public NewsAdapter() {
        super();
        mItems = new ArrayList<NewsItem>();
        NewsItem nama = new NewsItem();
        nama.setTanggal("19 Mei 2021");
        nama.setJudul("Ekspor Pertanian Tumbuh Positif, Kementan Sebut Sudah dalam Koridor");
        nama.setThumbnail(R.drawable.berita);
        mItems.add(nama);

        nama = new NewsItem();
        nama.setTanggal("19 Mei 2021");
        nama.setJudul("Ekspor Pertanian Tumbuh Positif, Kementan Sebut Sudah dalam Koridor");
        nama.setThumbnail(R.drawable.berita2);
        mItems.add(nama);

        nama = new NewsItem();
        nama.setTanggal("19 Mei 2021");
        nama.setJudul("Ekspor Pertanian Tumbuh Positif, Kementan Sebut Sudah dalam Koridor");
        nama.setThumbnail(R.drawable.berita3);
        mItems.add(nama);

        nama = new NewsItem();
        nama.setTanggal("19 Mei 2021");
        nama.setJudul("Ekspor Pertanian Tumbuh Positif, Kementan Sebut Sudah dalam Koridor");
        nama.setThumbnail(R.drawable.berita4);
        mItems.add(nama);

        nama = new NewsItem();
        nama.setTanggal("19 Mei 2021");
        nama.setJudul("Ekspor Pertanian Tumbuh Positif, Kementan Sebut Sudah dalam Koridor");
        nama.setThumbnail(R.drawable.berita5);
        mItems.add(nama);
    }

    @Override
    public ViewHolder onCreateViewHolder(ViewGroup viewGroup, int i) {
        View v = LayoutInflater.from(viewGroup.getContext())
                .inflate(R.layout.list_item_news, viewGroup, false);
        ViewHolder viewHolder = new ViewHolder(v);
        return viewHolder;
    }

    @Override
    public void onBindViewHolder(ViewHolder viewHolder, int i) {
        NewsItem nature = mItems.get(i);
        viewHolder.tvspecies.setText(nature.getTanggal());
        viewHolder.judul.setText(nature.getJudul());
        viewHolder.imgThumbnail.setImageResource(nature.getThumbnail());
    }

    @Override
    public int getItemCount() {

        return mItems.size();
    }

    class ViewHolder extends RecyclerView.ViewHolder  {


        public ImageView imgThumbnail;
        public TextView tvspecies;
        public TextView judul;

        public ViewHolder(View itemView) {
            super(itemView);
            imgThumbnail = (ImageView)itemView.findViewById(R.id.img_thumbnail);
            tvspecies = (TextView)itemView.findViewById(R.id.tanggal);
            judul = (TextView)itemView.findViewById(R.id.judul);

        }
    }
}

