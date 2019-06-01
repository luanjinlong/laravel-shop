<?php
/**
 * @link https://learnku.com/courses/laravel-shop/5.8/alipay-to-pay/4279
 */
return [
    'alipay' => [
        'app_id'         => '2016072900117187',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApCTwPqA8yz48+YgGrIwTZ1BtpoTWfgdKJ5AzsL1u14CAhWjVHMzNyXAAxyNe2oGX5vAZJ+Sv0iZGPxmu9Z/RirgcJLUQbQ1rL4LH1WpBQhYJsFRyDeOjxeURq0Ue1vydKp7KJuNPC2CKB9r3Yt6Y8P//oLmUf2xRftAs8xXMrMKnZg8CPEPL4kxhtyTvcYewrafnkH9O2G4j5VWKadIKiIy4tdOi6PpT9zlyRv3aLr0cBaL3NorxDZsxmtLJOQJ7m3Idq48nZpVrAhU6BwepqGvdd3vGQIj6AqJjgPQ4Eg4JglAOwZuhfrT06wcCxg22BSqSKw5qJ8FANVXURwlsuwIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAqknGXb1O+YFCvv9cmrr/BrqGYg4a6//17USGXbplBBP5vwLw2hwBGbe2H29j0xjasrAicFl0f6kmiWBv6jIgY6ze3sZAtqE14yVHFTR4PK4tA3UjyDCecbVAHqyeNJjODnea+nxTEl5UPysGhIuUsj7iLv0EoBgLJYDsX7jVAGnE6S2/ssJRs1+4bA+RctmFkisHchbjVfv3mmGMr+Jk7rgQhttd6MJifzf54/E/SHnoEEqJRSux/Xf8Q4E/nlh2Di3PMZGZ6X8JVurjCj93LkMvgYjKBqbn0ce5bmBMgeS/Pulb9OnA3jYZk/oRB21Zuy3ErADvgMCkY/Qsp/a26QIDAQABAoIBACG4BAhxwN6U4tORGxQkbPU3H/7wjhInF9pIlFag3vnEvtI80dZOb0VZZD2rP9f/9uYlDFy0yeWxZ8kSCHcWP+WcyHDSTuQa3eHBcubXAev6DT2/BzvPrMAVRMIOKjF+BGdG9bAdyBE+Dm6HpX2/ac01uHHXdgABYsulUKjPn5W6CSrbWhHJFkspDpxW5H4br121loU10Q6pOk4IrPSPpMXIhVWzAOjlPb1nmBogr+s8i4W4+5vT7LxLefZY2wCGZBUcu2c0/vXP1lucpquoUCd+ZX9czTwR8iOp9d/81E1MMeFc++BcJ9zBCJTtjObx0EQBRRorW0VbIAN0tc73IJUCgYEA06XEj+lZRo9dSl/BOEAShGf2jm7DdzizSzlTYA0nGH5jg2kLL0p0b2YQc0DcBO9kzxmijnwqUinNeGNnhJWKeq8f/z8pd8d/nSxZO4iiw1f3Wb/H+z7FqaoAmnzsp5yfxV7SdYroOfttw67EKbTAZhLrk9VEL81eGTq2UVKX1x8CgYEAzfk05Ctuhq/yiMVHNeL6L/M0185kIED8CKhouPNdWd1WSO9USIChvP5WqflVndqA5ElcxeFqyREw6VsLSIzFmwiNxcTUPDI8uzldO8omPor8kjxA01cdlY37hoMVdfE76vNYjCfC6ImO9lFaPpYb2qCD0jLfwYVzwhcE5iuM2PcCgYBDAsM/hXR8wLua5sJ4muDCB2CrLCq7PrqV4KqjSMbOHIZJfyLJcFt5QemHdEu1TE6wu78aOfn0VcP2kBKgifB0c6o/2LG6ePHQw8/k55gRHXL1eaFJzVAsLeVPBKqxTwfPJ/yetsJcSV0xjc4SHmakau0nu2iBchaPCmXbTblBpQKBgDzB+jwkI6JPXHfD2dGndq2WTEwscZSiFrZnFx0XjL3pcH5rOq14ZD1fuSjCh+LchZDRozAr4lgVXhw34wgvnkqxJ0DjYseu+gMwVLRCWS2xyfdJFsZAuFVZYIy5NidoVYhk6AXP5Mq7aRR3wusbVHQVTU0//IkVWKQ0LhnHVvDZAoGANdlk+8g6QPX7dy1ejK34ysLKXLF5WuQt+NNVd80sq9Ya50B7Hmcf57Sk8pZZ/M7c9ulAmqfUB/BB25eIpFSwQ1SRuO2O1iTWvYivaL3tLuHxbJRgvjWj53tHL9qfLSu2TTBU9yC6ECr8Z/YiR29BeuBpCzxxZoo5Wm/m4kB/Tcc=',
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
