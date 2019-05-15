<?php

return [
    'alipay' => [
        'app_id'         => '2016093000635096',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwSwp6BgD6cSrlW47vx7TnDqXv060+wk7MOE9xofXcO1IvbE+OSD9gz140Oi+TMTUQBB7pQJMxTAy1hxeilGlx4Su/vD4+nIVSrNYAxbGQKkrgChbkcrsab12NL/79cWToXRbtRxFniQs0D4EeNoi0rB0cKNeJcDXd71Z85Iy1r8cWL0AmgzZPlwk0zkkoz11FTz3/POrGhGu9KA6rAcSu1vvZPEsYmFefmwx2Ka0Y/4wRebrCZtbj6LXkzGRPLBdKkMCVE52yf2/HE5OXOV+aGb/ig8jhv2swUDZuNu9MDgDX9J+i3k+CHNFuAJsDPmOC8v/gSnXnbOY4MvQ3QzwDwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAwSwp6BgD6cSrlW47vx7TnDqXv060+wk7MOE9xofXcO1IvbE+OSD9gz140Oi+TMTUQBB7pQJMxTAy1hxeilGlx4Su/vD4+nIVSrNYAxbGQKkrgChbkcrsab12NL/79cWToXRbtRxFniQs0D4EeNoi0rB0cKNeJcDXd71Z85Iy1r8cWL0AmgzZPlwk0zkkoz11FTz3/POrGhGu9KA6rAcSu1vvZPEsYmFefmwx2Ka0Y/4wRebrCZtbj6LXkzGRPLBdKkMCVE52yf2/HE5OXOV+aGb/ig8jhv2swUDZuNu9MDgDX9J+i3k+CHNFuAJsDPmOC8v/gSnXnbOY4MvQ3QzwDwIDAQABAoIBAQCNtKQZSmS0fD2SpQbXMPnyxVjEUiyZazAsr07t8ICuqqKN5RPMPNM8D0AtoE7Zahp51J2fcox2quDgCHeh6DtAnajyBDvhHQdZgS6zNWXB0VfD79ccoEvFVeL810kyBfpCmmUb+t1nIQpuyM/nB7476I3Cg1VxRIHLqO/vqfP5a3pBEWJtPcLV8dRtFMKnjhO5H0TIY5xP/lWqdHDN6KZ4lxcm0WuU+t44P61mb6xxHPKIwLjHO/HR6yfJq5e+zV2QRpxMNFDeaiaauAVNfT+EL8TrRPM1KuuvAdxJa7wZKfLrT2jp6F6E2rG87a5vsgefv+YsKe4+gnA+bGuy/ZzhAoGBAOKfCNPDpTawfvo23UoFuHinfqWOktYpDy532JB8K5viLe/sGdiirgowVbSVbhTqWTAvGFAEoQYprSM9WXCk9ZMH2O3ptVTYMRDEaIkVEhnXkTkwWyAz1X6wqbMlQuzFe5q2ZMrM85ocSn9huG/D0wtOP2b1XHsQkZEOoZa1Kv5TAoGBANo3Dc580VK+/6NM107TBSvCu/gJlh6j5B6s5+Uhuldh2dg06eM7RI3nZG/lf0ecL2LC2ROpIU5m7zLvkRtcjazRQw5J1gs0C+oFLVvGi3rhTwyENQ3bW0tiVIIKeE2Gq492iAb54JDqruJ0Xf08pSP4D9ACjAXWl3ZBPSa2XrfVAoGAdX/317SNKPoCHEHuIr8skoJly/lMcPYBBRrmkqOPCNgQ8WD9VbGjg2zkQylnVjjb3XvNo0+DHerl9muMwDcHjSB4fYK7ni4p4oOzn7/pDrUSexBzbxLxEysOEfCz7ofGOsVvJSd29uTMS5ejRW/HMQl1HjEBrl083HU1myp8DDkCgYBZkUdlfe4dXLBpQt0NSahRsfidcrHfmb3EqYv1jMaDn3JfQDjQQD9/T372PujjZ8Q7cWbQnxdAqxd7fMG+zVqJmMtBTiVBK/fH8qAPj4sowNpFdO6h5WuvoYi2Z73BdIlutWRYGLCISwvFf6Ykj4PpI6S56JG4w8Afld+XyDtQkQKBgF1m4Z1LiohLOE6XyIh20f8yrPdGT44Ywf9dQ0XloWzI27rTy8EXRY5WJab+V79qQBCPJRzcHg/nUWqgdQsHaPC+ipOFeAECzkEBAQ0R2bfvez2w4VNkMjcSLbkhkeTPnzc09MuYgjfCTK5tLXRbA4oUEtKdXzbq1ZoIlm565wBs',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
