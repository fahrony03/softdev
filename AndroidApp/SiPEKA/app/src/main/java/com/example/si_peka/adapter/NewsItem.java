package com.example.si_peka.adapter;

public class NewsItem {
    private String mTanggal;
    private String mJudul;
    private int mThumbnail;

    public String getTanggal() {
        return mTanggal;
    }

    public void setTanggal(String tanggal) {
        this.mTanggal = tanggal;
    }

    public String getJudul() {
        return mJudul;
    }

    public void setJudul(String judul) {
        this.mJudul = judul;
    }

    public int getThumbnail() {
        return mThumbnail;
    }

    public void setThumbnail(int thumbnail) {
        this.mThumbnail = thumbnail;
    }
}

