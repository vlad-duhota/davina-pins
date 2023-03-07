<?php /* Template Name: Home page */ ?>

<?php get_header(); ?>
<?php $pageId = get_the_ID() ?>
 <section class="hero">
                <div class="container">
                    <h2 class="hero__title h1">
                        <?php echo carbon_get_post_meta($pageId, 'hero_title_1')?>
                        <?php $img1 = carbon_get_post_meta($pageId, 'hero_title_img' )?>
                        <?php echo wp_get_attachment_image($img1, 'full')?>
                        <?php echo carbon_get_post_meta( $pageId, 'hero_title_2')?>
                    </h2>
                    <h2 class="hero__title h1">
                        <?php echo carbon_get_post_meta($pageId, 'hero_title_3')?>
                        <?php $img2 = carbon_get_post_meta( $pageId, 'hero_title_img_2')?>
                        <?php echo wp_get_attachment_image($img2, 'full')?>
                    </h2>
                    <div class="hero__cols">
                        <div class="hero__col hero__col_1">
                            <p class="hero__text">
                            <?php echo carbon_get_post_meta( $pageId, 'hero_text')?>
                            </p>
                            <a href="#form" class="btn-or">
                                Free Quote
                                <span>
                                    <img src="<?php echo get_template_directory_uri()?>/img/btn-arrow.svg" alt="arrow icon">
                                </span>
                            </a>
                        </div>
                        <?php $hero_list = carbon_get_post_meta($pageId, 'hero_list')?>
                        <?php if(!empty($hero_list)) : ?>
                            <ul class="hero__col hero__list">
                            <?php foreach($hero_list as $hero_item) : ?>
                                <li class="hero__item">
                                    <h3 class="hero__item-title"><?php echo $hero_item['hero_list_title']?></h3>
                                    <p><?php echo $hero_item['hero_list_text']?></p>
                                </li>
                            <?php endforeach;?>
                            </ul>
                        <?php endif;?>
                    </div>
                    <?php $hero_brands = carbon_get_post_meta($pageId, 'hero_brands')?>
                        <?php if(!empty($hero_list)) : ?>
                            <ul class="hero__logos">
                            <?php foreach($hero_brands as $hero_brand) : ?>
                                <li class="hero__logo">
                                    <a href="<?php echo $hero_brand['hero_brands_url']?>">
                                        <?php $brand_logo = $hero_brand['hero_brands_image']?>
                                        <?php echo wp_get_attachment_image($brand_logo, 'full')?>
                                    </a>
                                </li>
                            <?php endforeach;?>
                            </ul>
                        <?php endif;?>
                </div>
            </section>
            <section class="why">
                <div class="container">
                    <h2 class="center"><?php echo carbon_get_post_meta( $pageId, 'hero_title')?></h2>
                    <?php $why_list = carbon_get_post_meta($pageId, 'why_list')?>
                        <?php if(!empty($why_list)) : ?>
                            <ul class="why__list">
                            <?php foreach($why_list as $why_item) : ?>
                                <li class="why__item">
                                    <div class="why__item-img">
                                        <?php $why_img = $why_item['why_list_icon']?>
                                        <?php echo wp_get_attachment_image($why_img, 'full')?>
                                    </div>
                                    <h4 class="why__item-title"><?php echo $why_item['why_list_title']?></h4>
                                    <p class="why__item-text"><?php echo $why_item['why_list_text']?></p>
                                </li>
                            <?php endforeach;?>
                            </ul>
                        <?php endif;?>
                </div>
            </section>
            <section class="products" id="product">
                <div class="container">
                    <h2 class="center"><?php echo carbon_get_post_meta( $pageId, 'products_title')?></h2>
                    <div class="products__cols">
                        <div class="products__col products__col_1">
                            <div class="products__img">
                                <?php $productImg1 = carbon_get_post_meta( $pageId, 'products_img_1')?>
                                <?php echo wp_get_attachment_image($productImg1, 'full')?>
                                <p class="products__img-title"><?php echo carbon_get_post_meta( $pageId, 'products_img_text_1')?></p>
                            </div>
                            <?php $products_list_1 = carbon_get_post_meta($pageId, 'products_list_1')?>
                            <?php if(!empty($products_list_1)) : ?>
                            <?php foreach($products_list_1 as $product_item) : ?>
                                <?php $productImg = $product_item['products_list_1_img']?>
                                <?php if(!empty($productImg)) : ?>
                                    <?php echo wp_get_attachment_image($productImg, 'full', [], ["class" => "products__img-small"])?>
                                <?php endif;?>
                                <?php if(!empty($product_item['products_list_1_title'])) : ?>
                                    <h4 class="products__title"><?php echo $product_item['products_list_1_title']?></h4>
                                <?php endif;?>
                                <?php if(!empty($product_item['products_list_1_text'])) : ?>
                                    <p class="products__text"><?php echo $product_item['products_list_1_text']?></p>
                                <?php endif;?>
                            <?php endforeach;?>
                            <?php endif;?>
                        </div>
                        <div class="products__col products__col_2">
                        <div class="products__img">
                                <?php $productImg2 = carbon_get_post_meta( $pageId, 'products_img_2')?>
                                <?php echo wp_get_attachment_image($productImg2, 'full')?>
                                <p class="products__img-title"><?php echo carbon_get_post_meta( $pageId, 'products_img_text_2')?></p>
                            </div>
                            <?php $products_list_2 = carbon_get_post_meta($pageId, 'products_list_2')?>
                            <?php if(!empty($products_list_2)) : ?>
                            <?php foreach($products_list_2 as $product_item) : ?>
                                <?php $productImg = $product_item['products_list_2_img']?>
                                <?php if(!empty($productImg)) : ?>
                                    <?php echo wp_get_attachment_image($productImg, 'full', [], ["class" => "products__img-small"])?>
                                <?php endif;?>
                                <?php if(!empty($product_item['products_list_2_title'])) : ?>
                                    <h4 class="products__title"><?php echo $product_item['products_list_2_title']?></h4>
                                <?php endif;?>
                                <?php if(!empty($product_item['products_list_2_text'])) : ?>
                                    <p class="products__text"><?php echo $product_item['products_list_2_text']?></p>
                                <?php endif;?>
                            <?php endforeach;?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="story" id="about">
                <p class="story__line">
                    <?php for($i = 0; $i < 20; $i++){
                        echo carbon_get_post_meta($pageId, 'story_line');
                    }?>
                </p>
                <div class="container">
                    <?php $storyImg = carbon_get_post_meta($pageId, 'story_img')?>
                    <?php echo wp_get_attachment_image($storyImg, 'full', [], ["class" => "story__img"])?>
                    <div class="story__content">
                        <h2 class="light"><?php echo carbon_get_post_meta($pageId, 'story_title')?></h2>
                        <div class="story__text">
                            <?php echo carbon_get_post_meta($pageId, 'story_text')?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="what" id="reviews">
                <h2 class="center"><?php echo carbon_get_post_meta($pageId, 'what_title');?></h2>
                <p class="what__text">
                    <?php echo carbon_get_post_meta($pageId, 'what_text');?>
                </p>
                <?php $what_slider = carbon_get_post_meta($pageId, 'what_slider')?>
                        <?php if(!empty($what_slider)) : ?>
                            <div class="swiper what__swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <?php foreach($what_slider as $what_slide) : ?>
                                        <div class="swiper-slide what__slide">
                                            <svg width="39" height="27" viewBox="0 0 39 27" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 12.0475H16.8793V27H0V12.0475ZM11.7193 0H16.4421V7.9462H12.1566C11.2237 7.9462 10.5241 8.11709 10.0576 8.45886C9.6495 8.80063 9.44544 9.51266 9.44544 10.5949V14.0127H0V10.6804C0 7.09177 1.02034 4.41455 3.06102 2.64873C5.1017 0.88291 7.98781 0 11.7193 0Z"
                                                    fill="#FF7E00" />
                                                <path
                                                    d="M22.1207 12.0475H39V27H22.1207V12.0475ZM33.84 0H38.5627V7.9462H34.2773C33.3444 7.9462 32.6447 8.11709 32.1783 8.45886C31.7702 8.80063 31.5661 9.51266 31.5661 10.5949V14.0127H22.1207V10.6804C22.1207 7.09177 23.141 4.41455 25.1817 2.64873C27.2224 0.88291 30.1085 0 33.84 0Z"
                                                    fill="#FF7E00" />
                                            </svg>
                                            <div class="what__slide-text">
                                                <?php echo $what_slide['what_slider_text']?>
                                            </div>
                                            <div class="what__info">
                                                <?php $personImg = $what_slide['what_slider_img']?>
                                                <?php echo wp_get_attachment_image($personImg, 'full')?>
                                                <div class="what__info-content">
                                                    <h4 class="what__info-title"><?php echo $what_slide['what_slider_name']?></h3>
                                                    <p class="what__info-text"><?php echo $what_slide['what_slider_date']?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        <?php endif;?>
                    <div class="what__navigation">
                    <div class="what__navigation-btn what__navigation-btn_prev">
                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.96 8.5C19.5122 8.5 19.96 8.05228 19.96 7.5C19.96 6.94772 19.5122 6.5 18.96 6.5V8.5ZM0.392853 6.79289C0.00232887 7.18342 0.00232887 7.81658 0.392853 8.20711L6.75681 14.5711C7.14734 14.9616 7.7805 14.9616 8.17103 14.5711C8.56155 14.1805 8.56155 13.5474 8.17103 13.1569L2.51417 7.5L8.17103 1.84315C8.56155 1.45262 8.56155 0.819457 8.17103 0.428932C7.7805 0.0384078 7.14734 0.0384078 6.75681 0.428932L0.392853 6.79289ZM18.96 6.5L1.09996 6.5V8.5L18.96 8.5V6.5Z"
                                fill="#AFAFAF" />
                        </svg>

                    </div>
                    <div class="what__navigation-btn what__navigation-btn_next">
                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.1001 6.5C0.547813 6.5 0.100098 6.94772 0.100098 7.5C0.100098 8.05228 0.547813 8.5 1.1001 8.5V6.5ZM19.6672 8.20711C20.0577 7.81658 20.0577 7.18342 19.6672 6.79289L13.3032 0.428932C12.9127 0.0384078 12.2796 0.0384078 11.889 0.428932C11.4985 0.819457 11.4985 1.45262 11.889 1.84315L17.5459 7.5L11.889 13.1569C11.4985 13.5474 11.4985 14.1805 11.889 14.5711C12.2796 14.9616 12.9127 14.9616 13.3032 14.5711L19.6672 8.20711ZM1.1001 8.5H18.9601V6.5H1.1001V8.5Z"
                                fill="#AFAFAF" />
                        </svg>

                    </div>
            </section>
            <section class="form" id="form">
                <div class="container">
                    <div class="form__left">
                        <h2 class="form__title"><?php echo carbon_get_post_meta($pageId, 'form_title')?></h2>
                        <?php $formImg = carbon_get_post_meta($pageId, 'form_img')?>
                        <?php echo wp_get_attachment_image($formImg, 'full', [], ["class" => "form__img"])?>
                        <div class="form__text">
                            <?php echo carbon_get_post_meta($pageId, 'form_text')?>
                        </div>
                    </div>
                    <div class="form__right">
                        <form action="form.php" method="POST">
                            <div class="col-2">
                                <div class="form__input-block">
                                    <label for="first-name">
                                        First Name
                                    </label>
                                    <input type="text" required class="form__input" placeholder="Your First Name"
                                        id="first-name" name="first-name">
                                </div>
                                <div class="form__input-block">
                                    <label for="last-name">
                                        Last Name
                                    </label>
                                    <input type="text" required class="form__input" placeholder="Your Last Name"
                                        id="last-name" name="last-name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form__input-block">
                                    <label for="email">
                                        Email
                                    </label>
                                    <input type="email" required class="form__input" placeholder="Your Email" id="email"
                                        name="email">
                                </div>
                                <div class="form__input-block">
                                    <label for="product">
                                        Product Type
                                    </label>
                                    <select class="form__input form__select" id="product" name="product">
                                        <?php foreach(carbon_get_post_meta($pageId, 'form_type') as $form_type) : ?>
                                            <option value="<?php echo $form_type['form_type_option']?>"><?php echo $form_type['form_type_option']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form__input-block">
                                    <label for="quantity">
                                        Quantity
                                    </label>
                                    <div class="js-spinner form__counter">
                                        <button type="button" spinner-button="down" title="subtract 1"><svg width="8"
                                                height="14" viewBox="0 0 8 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7 13L1 7L7 1" stroke="#858585" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <input type="number" step="1" max="100" min="0" data-stepper-debounce="400"
                                            class="js-stepper" id="quantity" name="quantity">
                                        <button type="button" spinner-button="up" title="add 1"><svg width="8"
                                                height="14" viewBox="0 0 8 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L7 7L1 13" stroke="#858585" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="form__input-block big">
                                    <label for="size">
                                        Size cm
                                    </label>
                                    <input type="text" required class="form__input" placeholder="Size Pins" id="size"
                                        name="size">
                                </div>
                                <div class="form__input-block">
                                    <label for="producttion">
                                        Production Process
                                    </label>
                                    <select class="form__input form__select" id="production" name="production">
                                        <?php foreach(carbon_get_post_meta($pageId, 'form_process') as $form_production) : ?>
                                            <option value="<?php echo $form_production['form_process_option']?>"><?php echo $form_production['form_process_option']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form__input-block">
                                    <label for="metal">
                                        Metal Finish
                                    </label>
                                    <select class="form__input form__select" id="metal" name="metal">
                                        <?php foreach(carbon_get_post_meta($pageId, 'form_metal') as $form_metal) : ?>
                                            <option value="<?php echo $form_metal['form_metal_option']?>"><?php echo $form_metal['form_metal_option']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form__input-block">
                                    <label for="attachment">
                                        Attachment
                                    </label>
                                    <select class="form__input form__select" id="attachment" name="attachment">
                                        <?php foreach(carbon_get_post_meta($pageId, 'attachment') as $form_attachment) : ?>
                                            <option value="<?php echo $form_attachment['form_attachment_option']?>"><?php echo $form_attachment['form_attachment_option']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <h4>Special Options</h4>
                            <div class="form__pins">
                                <input type="checkbox" name="s3d-image" id="s3d-image">
                                <label for="s3d-image">S3D Image</label>
                                <input type="checkbox" name="diamond-edge" id="diamond-edge">
                                <label for="diamond-edge">Diamond Edge</label>
                                <input type="checkbox" name="sandblast" id="sandblast">
                                <label for="sandblast">Sandblast</label>
                                <input type="checkbox" name="sequential-numbers" id="sequential-numbers">
                                <label for="sequential-numbers">Sequential Numbers</label>
                                <input type="checkbox" name="dual-plating" id="dual-plating">
                                <label for="dual-plating">Dual Plating</label>
                                <input type="checkbox" name="edge-engraving" id="edge-engraving">
                                <label for="edge-engraving">Edge Engraving</label>
                                <input type="checkbox" name="cut-out" id="cut-out">
                                <label for="cut-out">Cut-Out</label>
                                <input type="checkbox" name="glow" id="glow">
                                <label for="glow">Glow in the Dark</label>
                                <input type="checkbox" name="picture" id="picture">
                                <label for="picture">Picture Insert</label>
                            </div>
                            <button type="submit" class="btn-or white">
                                Send
                                <span>
                                    <img src="<?php echo get_template_directory_uri()?>/img/form-arrow.svg" alt="arrow icon">
                                </span>
                                </a>
                        </form>
                    </div>
                </div>
            </section>

<?php get_footer(); ?>