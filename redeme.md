修改的位置
1.原本提交订单是直接关闭的，我将 dispatch(new CloseOrder($order, config('app.order_ttl'))); 函数屏蔽掉，可以继续使用
2.阿里支付的位置 config/pay.php