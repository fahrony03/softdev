package com.example.si_peka.ui.home;

import android.content.Intent;
import android.os.Bundle;
import android.view.Display;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;

import com.example.si_peka.DetailProduk;
import com.example.si_peka.R;
import com.example.si_peka.databinding.FragmentHomeBinding;
import com.example.si_peka.databinding.FragmentProfileBinding;
import com.example.si_peka.ui.notifications.NotificationsFragment;
import com.example.si_peka.ui.profile.ProfileFragment;
import com.example.si_peka.ui.profile.ProfileViewModel;

public class HomeFragment extends Fragment {

//    private HomeViewModel homeViewModel;
//    private FragmentHomeBinding binding;
    private LinearLayout ktg1;

    public View onCreateView(@NonNull LayoutInflater inflater,
                             ViewGroup container, Bundle savedInstanceState) {
        View rootView = inflater.inflate(R.layout.fragment_home, container, false);

        ktg1 = (LinearLayout) rootView.findViewById(R.id.ktg1);
        ktg1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getActivity(),"DetailProduk", Toast.LENGTH_SHORT).show();

                Intent gopindah = new Intent(getActivity(), DetailProduk.class);
                startActivity(gopindah);
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