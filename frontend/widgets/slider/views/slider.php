<p>I'm supposed to get overwritten :)</p>
<p>btw here is list of my images:</p>
<ul>
    <?php foreach ($images as $image) : ?>
        <li><?= $image->getUrl($this->context->imagesPreset) ?></li>
    <?php endforeach ?>
</ul>
