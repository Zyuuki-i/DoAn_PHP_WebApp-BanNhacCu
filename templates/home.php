<?php
    require_once (dirname(__FILE__) ."/index.php");
?>
<div class="container text-center">
    <h2>Chào mừng đến Shop Nhạc Cụ</h2>
    <p>Mua bán các loại nhạc cụ chính hãng, giá tốt nhất thị trường</p>
    <a href="/products" class="btn btn-primary">Mua sắm ngay</a>
</div>

<section class="featured-products">
    <h2>Sản phẩm nổi bật</h2>
    <div class="products">
        <?php if (empty($products)): ?>
            <p class="text-muted">Chưa có sản phẩm nào.</p>
        <?php else: ?>
            <?php foreach (array_slice($products, 0, 6) as $p): ?>
            
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
