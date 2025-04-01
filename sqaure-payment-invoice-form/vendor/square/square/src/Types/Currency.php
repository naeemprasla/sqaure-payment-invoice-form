<?php

namespace Square\Types;

enum Currency: string
{
    case UnknownCurrency = "UNKNOWN_CURRENCY";
    case Aed = "AED";
    case Afn = "AFN";
    case All = "ALL";
    case Amd = "AMD";
    case Ang = "ANG";
    case Aoa = "AOA";
    case Ars = "ARS";
    case Aud = "AUD";
    case Awg = "AWG";
    case Azn = "AZN";
    case Bam = "BAM";
    case Bbd = "BBD";
    case Bdt = "BDT";
    case Bgn = "BGN";
    case Bhd = "BHD";
    case Bif = "BIF";
    case Bmd = "BMD";
    case Bnd = "BND";
    case Bob = "BOB";
    case Bov = "BOV";
    case Brl = "BRL";
    case Bsd = "BSD";
    case Btn = "BTN";
    case Bwp = "BWP";
    case Byr = "BYR";
    case Bzd = "BZD";
    case Cad = "CAD";
    case Cdf = "CDF";
    case Che = "CHE";
    case Chf = "CHF";
    case Chw = "CHW";
    case Clf = "CLF";
    case Clp = "CLP";
    case Cny = "CNY";
    case Cop = "COP";
    case Cou = "COU";
    case Crc = "CRC";
    case Cuc = "CUC";
    case Cup = "CUP";
    case Cve = "CVE";
    case Czk = "CZK";
    case Djf = "DJF";
    case Dkk = "DKK";
    case Dop = "DOP";
    case Dzd = "DZD";
    case Egp = "EGP";
    case Ern = "ERN";
    case Etb = "ETB";
    case Eur = "EUR";
    case Fjd = "FJD";
    case Fkp = "FKP";
    case Gbp = "GBP";
    case Gel = "GEL";
    case Ghs = "GHS";
    case Gip = "GIP";
    case Gmd = "GMD";
    case Gnf = "GNF";
    case Gtq = "GTQ";
    case Gyd = "GYD";
    case Hkd = "HKD";
    case Hnl = "HNL";
    case Hrk = "HRK";
    case Htg = "HTG";
    case Huf = "HUF";
    case Idr = "IDR";
    case Ils = "ILS";
    case Inr = "INR";
    case Iqd = "IQD";
    case Irr = "IRR";
    case Isk = "ISK";
    case Jmd = "JMD";
    case Jod = "JOD";
    case Jpy = "JPY";
    case Kes = "KES";
    case Kgs = "KGS";
    case Khr = "KHR";
    case Kmf = "KMF";
    case Kpw = "KPW";
    case Krw = "KRW";
    case Kwd = "KWD";
    case Kyd = "KYD";
    case Kzt = "KZT";
    case Lak = "LAK";
    case Lbp = "LBP";
    case Lkr = "LKR";
    case Lrd = "LRD";
    case Lsl = "LSL";
    case Ltl = "LTL";
    case Lvl = "LVL";
    case Lyd = "LYD";
    case Mad = "MAD";
    case Mdl = "MDL";
    case Mga = "MGA";
    case Mkd = "MKD";
    case Mmk = "MMK";
    case Mnt = "MNT";
    case Mop = "MOP";
    case Mro = "MRO";
    case Mur = "MUR";
    case Mvr = "MVR";
    case Mwk = "MWK";
    case Mxn = "MXN";
    case Mxv = "MXV";
    case Myr = "MYR";
    case Mzn = "MZN";
    case Nad = "NAD";
    case Ngn = "NGN";
    case Nio = "NIO";
    case Nok = "NOK";
    case Npr = "NPR";
    case Nzd = "NZD";
    case Omr = "OMR";
    case Pab = "PAB";
    case Pen = "PEN";
    case Pgk = "PGK";
    case Php = "PHP";
    case Pkr = "PKR";
    case Pln = "PLN";
    case Pyg = "PYG";
    case Qar = "QAR";
    case Ron = "RON";
    case Rsd = "RSD";
    case Rub = "RUB";
    case Rwf = "RWF";
    case Sar = "SAR";
    case Sbd = "SBD";
    case Scr = "SCR";
    case Sdg = "SDG";
    case Sek = "SEK";
    case Sgd = "SGD";
    case Shp = "SHP";
    case Sll = "SLL";
    case Sle = "SLE";
    case Sos = "SOS";
    case Srd = "SRD";
    case Ssp = "SSP";
    case Std = "STD";
    case Svc = "SVC";
    case Syp = "SYP";
    case Szl = "SZL";
    case Thb = "THB";
    case Tjs = "TJS";
    case Tmt = "TMT";
    case Tnd = "TND";
    case Top = "TOP";
    case Try_ = "TRY";
    case Ttd = "TTD";
    case Twd = "TWD";
    case Tzs = "TZS";
    case Uah = "UAH";
    case Ugx = "UGX";
    case Usd = "USD";
    case Usn = "USN";
    case Uss = "USS";
    case Uyi = "UYI";
    case Uyu = "UYU";
    case Uzs = "UZS";
    case Vef = "VEF";
    case Vnd = "VND";
    case Vuv = "VUV";
    case Wst = "WST";
    case Xaf = "XAF";
    case Xag = "XAG";
    case Xau = "XAU";
    case Xba = "XBA";
    case Xbb = "XBB";
    case Xbc = "XBC";
    case Xbd = "XBD";
    case Xcd = "XCD";
    case Xdr = "XDR";
    case Xof = "XOF";
    case Xpd = "XPD";
    case Xpf = "XPF";
    case Xpt = "XPT";
    case Xts = "XTS";
    case Xxx = "XXX";
    case Yer = "YER";
    case Zar = "ZAR";
    case Zmk = "ZMK";
    case Zmw = "ZMW";
    case Btc = "BTC";
    case Xus = "XUS";
}
