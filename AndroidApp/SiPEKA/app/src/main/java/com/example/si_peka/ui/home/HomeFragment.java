
package com.example.si_peka.ui.home;

import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.LinearLayout;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.fragment.app.Fragment;

import com.example.si_peka.DetailArtikel;
import com.example.si_peka.DetailArtikel1;
import com.example.si_peka.DetailArtikel2;
import com.example.si_peka.DetailKategori1;
import com.example.si_peka.DetailKategori2;
import com.example.si_peka.DetailKategori3;
import com.example.si_peka.DetailKategori4;
import com.example.si_peka.DetailProduk;
import com.example.si_peka.DetailProduk1;
import com.example.si_peka.DetailProduk2;
import com.example.si_peka.DetailProduk3;
import com.example.si_peka.DetailProduk4;
import com.example.si_peka.R;

public class HomeFragment extends Fragment {

//    private HomeViewModel homeViewModel;
//    private FragmentHomeBinding binding;
    private LinearLayout ktg1;
    private LinearLayout ktg2;
    private LinearLayout ktg3;
    private LinearLayout ktg4;
    private LinearLayout prod1;
    private LinearLayout prod2;
    private LinearLayout prod3;
    private LinearLayout prod4;
    private LinearLayout prod5;
    private LinearLayout open1;
    private LinearLayout open2;

    public View onCreateView(@NonNull LayoutInflater inflater,
                             ViewGroup container, Bundle savedInstanceState) {
        View rootView = inflater.inflate(R.layout.fragment_home, container, false);

        ktg1 = (LinearLayout) rootView.findViewById(R.id.ktg1);
        ktg2 = (LinearLayout) rootView.findViewById(R.id.ktg2);
        ktg3 = (LinearLayout) rootView.findViewById(R.id.ktg3);
        ktg4 = (LinearLayout) rootView.findViewById(R.id.ktg4);
        prod1 = (LinearLayout) rootView.findViewById(R.id.prod1);
        prod2 = (LinearLayout) rootView.findViewById(R.id.prod2);
        prod3 = (LinearLayout) rootView.findViewById(R.id.prod3);
        prod4 = (LinearLayout) rootView.findViewById(R.id.prod4);
        prod5 = (LinearLayout) rootView.findViewById(R.id.prod5);

        open1 = (LinearLayout) rootView.findViewById(R.id.open1);
        open2 = (LinearLayout) rootView.findViewById(R.id.open2);

        Button button = rootView.findViewById(R.id.btnSponsor);


        ktg1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getActivity(),"DetailKategori", Toast.LENGTH_SHORT).show();

                Intent gopindah = new Intent(getActivity(), DetailKategori1.class);
                startActivity(gopindah);
            }
        });

        ktg2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getActivity(),"DetailKategori", Toast.LENGTH_SHORT).show();

                Intent gopindah = new Intent(getActivity(), DetailKategori2.class);
                startActivity(gopindah);
            }
        });
        ktg3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getActivity(),"DetailKategori", Toast.LENGTH_SHORT).show();

                Intent gopindah = new Intent(getActivity(), DetailKategori3.class);
                startActivity(gopindah);
            }
        });
        ktg4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getActivity(),"DetailKategori", Toast.LENGTH_SHORT).show();

                Intent gopindah = new Intent(getActivity(), DetailKategori4.class);
                startActivity(gopindah);
            }
        });


//
        prod1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getActivity(),"DetailProduk", Toast.LENGTH_SHORT).show();

                Intent gopindah = new Intent(getActivity(), DetailProduk.class);
                startActivity(gopindah);
            }
        });
        prod2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getActivity(),"DetailProduk", Toast.LENGTH_SHORT).show();

                Intent gopindah = new Intent(getActivity(), DetailProduk1.class);
                startActivity(gopindah);
            }
        });
        prod3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getActivity(),"DetailProduk", Toast.LENGTH_SHORT).show();

                Intent gopindah = new Intent(getActivity(), DetailProduk2.class);
                startActivity(gopindah);
            }
        });
        prod4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getActivity(),"DetailProduk", Toast.LENGTH_SHORT).show();

                Intent gopindah = new Intent(getActivity(), DetailProduk3.class);
                startActivity(gopindah);
            }
        });
        prod5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getActivity(),"DetailProduk", Toast.LENGTH_SHORT).show();

                Intent gopindah = new Intent(getActivity(), DetailProduk4.class);
                startActivity(gopindah);
            }
        });
        open1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getActivity(),"DetailArtikel", Toast.LENGTH_SHORT).show();

                Intent gopindah = new Intent(getActivity(), DetailArtikel1.class);
                startActivity(gopindah);
            }
        });
        open2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getActivity(),"DetailArtikel", Toast.LENGTH_SHORT).show();

                Intent gopindah = new Intent(getActivity(), DetailArtikel2.class);
                startActivity(gopindah);
            }
        });

        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(getActivity(), DetailProduk.class);
                startActivity(intent);
            }
        });
    return rootView;
    }


}

//        homeViewModel =
//                new ViewModelProvider(this).get(HomeViewModel.class);
//
//        binding = FragmentHomeBinding.inflate(inflater, container, false);
//        View root = binding.getRoot();
//
//        View view = inflater.inflate(R.layout.fragment_home, binding.cardshop, false);
//        LinearLayout layout = view.findViewById(R.id.cardshop);
//        layout.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                Intent gopindah = new Intent(getActivity(), ProfileFragment.class);
//                startActivity(gopindah);

//        });
        //

//        final TextView textView = binding.txthome;
//        homeViewModel.getText().observe(getViewLifecycleOwner(), new Observer<String>() {
//            @Override
//            public void onChanged(@Nullable String s) {
//                textView.setText(s);
//            }
//        });
        //
//        return root;
//    }
//
//    @Override
//    public void onDestroyView() {
//        super.onDestroyView();
//        binding = null;
//    }
//}