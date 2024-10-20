<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- !bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/main.css" />
    <title>E-Commerce | Single Blog</title>
</head>

<body>
    <!-- ! header start -->
    <?php
  include("includes/header.php")
  ?>
    <!-- ! header end -->

    <!-- ! modal search start -->
    <div class="modal-search">
        <div class="modal-wrapper">
            <h3 class="modal-title">Search for products</h3>
            <p class="modal-text">
                Start typing to see products you are looking for.
            </p>
            <form class="search-form">
                <input type="text" placeholder="Search a product" />
                <button><i class="bi bi-search"></i></button>
            </form>
            <div class="search-result">
                <div class="search-heading">
                    <h3>RESULT FROM PRODUCT</h3>
                </div>
                <div class="results">
                    <a href="#" class="result-item">
                        <img src="img/products/product1/1.png" class="search-thumb" alt="" />
                        <div class="search-info">
                            <h4>Analogue Resin Strap</h4>
                            <span class="search-sku">SKU : PD0016</span>
                            <span class="search-price">$108.00</span>
                        </div>
                    </a>
                    <a href="#" class="result-item">
                        <img src="img/products/product2/1.png" class="search-thumb" alt="" />
                        <div class="search-info">
                            <h4>Analogue Resin Strap</h4>
                            <span class="search-sku">SKU : PD0016</span>
                            <span class="search-price">$108.00</span>
                        </div>
                    </a>
                </div>
            </div>
            <i class="bi bi-x-circle"></i>
        </div>
    </div>
    <!-- ! modal search end -->

    <!-- ! single blog start -->
    <section class="single-blog">
        <div class="container">
            <article>
                <figure>
                    <a href="#">
                        <img src="img/blogs/blog1.jpg" alt="">
                    </a>
                </figure>
                <div class="blog-wrapper">
                    <div class="blog-meta">
                        <div class="blog-category">
                            <a href="#">
                                COLLECTION
                            </a>
                        </div>
                        <div class="blog-date">
                            <a href="#">
                                April 25, 2022
                            </a>
                        </div>
                        <div class="blog-tags">
                            <a href="#">products</a>,
                            <a href="#">coats</a>
                        </div>
                    </div>
                    <h1 class="blog-title">
                        The Best Products That Shape Fashion
                    </h1>
                    <div class="blog-content">
                        <p>
                            Donec rhoncus quis diam sit amet faucibus. Vivamus pellentesque, sem sed convallis
                            ultricies, ante eros laoreet libero, vitae suscipit lorem turpis sit amet lectus. Quisque
                            egestas lorem ut mauris ultrices, vitae sollicitudin quam facilisis. Vivamus rutrum urna non
                            ligula tempor aliquet. Fusce tincidunt est magna, id malesuada massa imperdiet ut. Nunc non
                            nisi urna. Nam consequat est nec turpis eleifend ornare. Vestibulum eu justo lobortis mauris
                            commodo efficitur. Nunc pulvinar pulvinar cursus.
                        </p>
                        <p>
                            Nulla id nibh ligula. Etiam finibus elit nec nisl faucibus, vel auctor tortor iaculis.
                            Vivamus aliquet ipsum purus, vel auctor felis interdum at. Praesent quis fringilla justo. Ut
                            non dui at mi laoreet gravida vitae eu elit. Aliquam in elit eget purus scelerisque
                            efficitur vel ac sem. Etiam ante magna, vehicula et vulputate in, aliquam sit amet metus.
                            Donec mauris eros, aliquet in nibh quis, semper suscipit nunc. Phasellus ornare nibh vitae
                            dapibus tempor.
                        </p>
                        <blockquote>
                            <p>
                                Aliquam purus enim, fringilla vel nunc imperdiet, consequat ultricies massa. Praesent
                                sed turpis sollicitudin, dignissim justo vel, fringilla mi.
                            </p>
                        </blockquote>
                        <p>
                            Vivamus libero leo, tincidunt eget lectus rhoncus, finibus interdum neque. Curabitur aliquet
                            dolor purus, id molestie purus elementum vitae. Sed quis aliquet eros. Morbi condimentum
                            ornare nibh, et tincidunt ante interdum facilisis. Praesent sagittis tortor et felis finibus
                            vestibulum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus dapibus
                            turpis sit amet turpis tincidunt, sit amet mollis turpis suscipit. Proin arcu diam, pretium
                            nec tempus eu, feugiat non ex.
                        </p>
                        <p>
                            Donec feugiat tincidunt eros, ac aliquam purus egestas condimentum. Curabitur imperdiet at
                            leo pellentesque mattis. Fusce a dignissim est. In enim nisi, hendrerit placerat nunc quis,
                            porttitor lobortis neque. Donec nec nulla arcu. Proin felis augue, volutpat ac nunc a,
                            semper egestas dolor. Sed varius magna non lacus viverra, at dapibus sem interdum. Proin
                            urna nibh, maximus nec interdum ut, hendrerit et arcu. Nunc venenatis eget nulla at tempor.
                            Duis sed tellus placerat, bibendum felis quis, efficitur nisi. Morbi porta placerat urna et
                            pharetra. Proin condimentum, libero ac feugiat efficitur, est orci consectetur sapien, a
                            pretium leo leo in elit. Quisque fringilla finibus arcu, pretium posuere urna posuere sit
                            amet. Nullam quis sapien a augue aliquet accumsan eget eu risus. Ut at mi sed velit
                            condimentum porta. Proin vestibulum congue ullamcorper.
                        </p>
                        <p>
                            Nunc blandit ligula mi, quis commodo dolor fermentum sit amet. Nam vehicula pharetra lacus a
                            vulputate. Duis pulvinar vestibulum dolor, vel commodo arcu laoreet ac. Vestibulum sed
                            consequat purus, vitae auctor metus. Duis ut aliquet odio, at tincidunt nunc. Vestibulum
                            dignissim aliquet orci, rutrum malesuada ipsum facilisis vel. Morbi tempor dignissim nisi.
                            Maecenas scelerisque maximus justo eget sodales. Sed finibus consectetur vulputate.
                            Pellentesque id pellentesque nulla. Sed ut viverra eros. Vestibulum ut ligula quam.
                        </p>
                    </div>
                </div>
            </article>
            <div class="tab-panel-reviews">
                <h3>2 reviews for Basic Colored Sweatpants With Elastic Hems
                </h3>
                <div class="comments">
                    <ol class="comment-list">
                        <li class="comment-item">
                            <div class="comment-avatar">
                                <img src="img/avatars/avatar1.jpg" alt="">
                            </div>
                            <div class="comment-text">
                                <ul class="comment-stars">
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-half"></i>
                                    </li>
                                </ul>
                                <div class="comment-meta">
                                    <strong>admin</strong>
                                    <span>-</span>
                                    <time>April 23, 2022</time>
                                </div>
                                <div class="comment-description">
                                    <p>
                                        Sed perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium doloremque laudantium.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="comment-item">
                            <div class="comment-avatar">
                                <img src="img/avatars/avatar1.jpg" alt="">
                            </div>
                            <div class="comment-text">
                                <ul class="comment-stars">
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-half"></i>
                                    </li>
                                </ul>
                                <div class="comment-meta">
                                    <strong>admin</strong>
                                    <span>-</span>
                                    <time>April 23, 2022</time>
                                </div>
                                <div class="comment-description">
                                    <p>
                                        Sed perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium doloremque laudantium.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
                <!-- review form start -->
                <div class="review-form-wrapper">
                    <h2>Add a review
                    </h2>
                    <form action="" class="comment-form">
                        <p class="comment-notes">
                            Your email address will not be published. Required fields are marked with
                            <span class="required">*</span>
                        </p>
                        <div class="comment-form-rating">
                            <label>
                                Your rating
                                <span class="required">*</span>
                            </label>
                            <div class="stars">
                                <a href="#" class="star">
                                    <i class="i bi-star-fill"></i>
                                </a>
                                <a href="#" class="star">
                                    <i class="i bi-star-fill"></i>
                                    <i class="i bi-star-fill"></i>
                                </a>
                                <a href="#" class="star">
                                    <i class="i bi-star-fill"></i>
                                    <i class="i bi-star-fill"></i>
                                    <i class="i bi-star-fill"></i>
                                </a>
                                <a href="#" class="star">
                                    <i class="i bi-star-fill"></i>
                                    <i class="i bi-star-fill"></i>
                                    <i class="i bi-star-fill"></i>
                                    <i class="i bi-star-fill"></i>
                                </a>
                                <a href="#" class="star">
                                    <i class="i bi-star-fill"></i>
                                    <i class="i bi-star-fill"></i>
                                    <i class="i bi-star-fill"></i>
                                    <i class="i bi-star-fill"></i>
                                    <i class="i bi-star-fill"></i>
                                </a>
                            </div>
                        </div>
                        <div class="comment-form-comment form-comment">
                            <label for="form-review">
                                Your review
                                <span class="required">*</span>
                            </label>
                            <textarea cols="50" rows="10" id="form-review">

                            </textarea>
                        </div>
                        <div class="comment-form-author form-comment">
                            <label for="name">Name
                                <span class="required">*</span>
                            </label>
                            <input type="text" id="name">
                        </div>
                        <div class="comment-form-email form-comment">
                            <label for="email">Email
                                <span class="required">*</span>
                            </label>
                            <input type="email" id="email">
                        </div>
                        <div class="comment-form-cookie">
                            <input type="checkbox" id="cookie">
                            <label for="cookie">
                                Save my name, email, and website in this browser for the next time I
                                comment.
                                <span class="required">*</span>
                            </label>
                        </div>
                        <div class="form-submit">
                            <input class="btn btn-submit" type="submit" value="Send">
                        </div>

                    </form>

                </div>
                <!-- review form end -->
            </div>
        </div>
    </section>
    <!-- ! single blog end -->

    <!-- ! policy start -->
    <section class="policy">
        <div class="container">
            <ul class="policy-list">
                <li class="policy-item">
                    <i class="bi bi-truck"></i>
                    <div class="policy-texts">
                        <strong>FREE DELIVERY</strong>
                        <span>From $59.89</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-headset"></i>
                    <div class="policy-texts">
                        <strong>SUPPORT 24/7</strong>
                        <span>Online 24 hours</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-arrow-clockwise"></i>
                    <div class="policy-texts">
                        <strong>30 DAYS RETURN</strong>
                        <span>Simply return it within 30 days</span>
                    </div>
                </li>
                <li class="policy-item">
                    <i class="bi bi-credit-card"></i>
                    <div class="policy-texts">
                        <strong>PAYMENT METHOD</strong>
                        <span>Secure Payment</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- ! policy end -->

    <!-- ! footer start -->
    <?php
  include("includes/footer.php")
  ?>
</body>

</html>