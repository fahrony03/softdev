package com.example.si_peka.ui.notifications;

import android.annotation.SuppressLint;
import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.LinearLayout;
import android.widget.Toast;

import androidx.fragment.app.Fragment;
import androidx.recyclerview.widget.GridLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import com.example.si_peka.DetailProduk;
import com.example.si_peka.R;
import com.example.si_peka.adapter.NewsAdapter;
import com.example.si_peka.DetailArtikel;

public class NotificationsFragment extends Fragment{

    RecyclerView mRecyclerView;
    RecyclerView.LayoutManager mLayoutManager;
    RecyclerView.Adapter mAdapter;
    private LinearLayout buttonOpen;
    public NotificationsFragment() {
        // Required empty public constructor
    }
    @SuppressLint("WrongViewCast")
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment

        View view = inflater.inflate(R.layout.fragment_notifications, container, false);
        mRecyclerView = (RecyclerView) view.findViewById(R.id.recyclerView2);
        mRecyclerView.setHasFixedSize(true);


        mLayoutManager = new GridLayoutManager(getActivity(), 2);
        mRecyclerView.setLayoutManager(mLayoutManager);

        mAdapter = new NewsAdapter();
        mRecyclerView.setAdapter(mAdapter);
       Button button = view.findViewById(R.id.buttonOpen);
      button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(getActivity(), DetailArtikel.class);
                startActivity(intent);
            }
        });

        return view ;
    }
}