<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce | Blog</title>
</head>

<body>
    <!-- ! header start -->
    <?php include("includes/header.php") ?>
    <!-- ! header end -->

    <!-- ! modal search start -->
    <div class="modal-search">
        <div class="modal-wrapper">
            <h3 class="modal-title">Search for products</h3>
            <p class="modal-text">
                Start typing to see products you are looking for.
            </p>
            <div class="search">
                <input type="text" placeholder="Search a product" />
                <button><i class="bi bi-search"></i></button>
            </div>
            <div class="search-result">
                <div class="search-heading">
                    <h3>RESULT FROM PRODUCT</h3>
                </div>
                <div class="results"></div>
            </div>
            <i class="bi bi-x-circle" id="close-modal-search"></i>
        </div>
    </div>
    <!-- ! modal search end -->

    <!-- ! blogs start  -->
    <section class="blogs blog-page">
        <div class="container">
            <div class="section-title">
                <h2>From Our Blog</h2>
                <p>Summer Collection New Modern Design</p>
            </div>

            <ul class="blog-list" id="updates-container">
                <li class="blog-item">
                    <a href="single-blog.php" class="blog-image">
                        <img src="img/blogs/blog1.jpg" alt="" />
                    </a>
                    <div class="blog-info">
                        <div class="blog-info-top">
                            <span>25 Feb, 2021</span>
                            -
                            <span>0 Comments</span>
                        </div>
                        <div class="blog-info-center">
                            <a href="#"> Aliquam hendrerit mi metus </a>
                        </div>
                        <div class="blog-info-bottom">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </li>
                <li class="blog-item">
                    <a href="single-blog.php" class="blog-image">
                        <img src="img/blogs/blog2.jpg" alt="" />
                    </a>
                    <div class="blog-info">
                        <div class="blog-info-top">
                            <span>26 Feb, 2021</span>
                            -
                            <span>0 Comments</span>
                        </div>
                        <div class="blog-info-center">
                            <a href="#"> Vestibulum ante ipsum primis </a>
                        </div>
                        <div class="blog-info-bottom">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </li>
                <li class="blog-item">
                    <a href="single-blog.php" class="blog-image">
                        <img src="img/blogs/blog3.jpg" alt="" />
                    </a>
                    <div class="blog-info">
                        <div class="blog-info-top">
                            <span>27 Feb, 2021</span>
                            -
                            <span>0 Comments</span>
                        </div>
                        <div class="blog-info-center">
                            <a href="#"> Morbi in sem quis dui placerat </a>
                        </div>
                        <div class="blog-info-bottom">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </li>
                <li class="blog-item">
                    <a href="single-blog.php" class="blog-image">
                        <img src="img/blogs/blog4.jpg" alt="" />
                    </a>
                    <div class="blog-info">
                        <div class="blog-info-top">
                            <span>28 Feb, 2021</span>
                            -
                            <span>0 Comments</span>
                        </div>
                        <div class="blog-info-center">
                            <a href="#"> Nunc lacinia ante a odio </a>
                        </div>
                        <div class="blog-info-bottom">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </li>
                <li class="blog-item">
                    <a href="single-blog.php" class="blog-image">
                        <img src="img/blogs/blog5.jpg" alt="" />
                    </a>
                    <div class="blog-info">
                        <div class="blog-info-top">
                            <span>29 Feb, 2021</span>
                            -
                            <span>0 Comments</span>
                        </div>
                        <div class="blog-info-center">
                            <a href="#"> Curabitur tincidunt </a>
                        </div>
                        <div class="blog-info-bottom">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </li>
                <li class="blog-item">
                    <a href="single-blog.php" class="blog-image">
                        <img src="img/blogs/blog6.jpg" alt="" />
                    </a>
                    <div class="blog-info">
                        <div class="blog-info-top">
                            <span>30 Feb, 2021</span>
                            -
                            <span>0 Comments</span>
                        </div>
                        <div class="blog-info-center">
                            <a href="#"> Donec hendrerit velit </a>
                        </div>
                        <div class="blog-info-bottom">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- ! blogs end -->

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
    <?php include("includes/footer.php") ?>
    <!-- ! footer end -->

    <!-- scripts start -->
    <script src="js/main.js" type="module"></script>

    <script>
        const apiURL = "https://67177dc3b910c6a6e0287de1.mockapi.io/updates";

        async function fetchUpdates() {
            try {
                const response = await fetch(apiURL);
                const updates = await response.json();

                const updatesContainer = document.getElementById('updates-container');
                updatesContainer.innerHTML = ''; 

                updates.slice(0, 6).forEach(update => {
                    const updateItem = document.createElement('li');
                    updateItem.classList.add('blog-item');

                    updateItem.innerHTML = `
                        <a href="single-blog.php" class="blog-image">
                            <img src="${update.image || 'default-image.jpg'}" alt="" />
                        </a>
                        <div class="blog-info">
                            <div class="blog-info-top">
                                <span>${new Date(update.created_at).toLocaleDateString()}</span>
                                -
                                <span>0 Comments</span>
                            </div>
                            <div class="blog-info-center">
                                <a href="#"> ${update.title} </a>
                            </div>
                            <div class="blog-info-bottom">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    `;

                    updatesContainer.appendChild(updateItem);
                });
            } catch (error) {
                console.error( error);
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            fetchUpdates();
        });
    </script>
    <!-- scripts end -->
</body>
</html>
