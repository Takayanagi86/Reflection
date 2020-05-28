<!-- Articles Database -->   
<?php
include(__DIR__ . '/articlesDB.php');
?>
<!-- Articles Database -->   


<div class="article-section">
                    <div class="art-bg">                   
                        <div class="<?php echo strtolower($category[2]); ?>-block">
                            <div class="art-box">
                                <a href="#" class="article-tooltip"><?php echo $category[2]; ?></a>
                                <div class="tooltip">
                                    <p><?php echo $tooltip[2]; ?></p>
                                    <div class="mini-arrow-down"></div>
                                </div><!-- tooltip -->
                                <div class="img-container">
                                    <img class="img" src="<?php echo $image[2]; ?>" alt="netmatters hiring">
                                    <div class="photo-overlay"></div>
                                </div><!-- img-container -->
                            </div><!-- art-box -->
                            <div class="art-container">
                                <div class="bot-art-sec">
                                    <h3><a href="#"><?php echo $title[2]; ?></a></h3>
                                    <p><?php echo $description[2]; ?></p>
                                    <button type="button" class="btn">Read More</button>
                                </div><!-- bot-art-sec -->
                                <div class="posted-section">
                                    <div class="picture">
                                        <img class="portrait" src="<?php echo $postedPic[2]; ?>" alt="portrait">
                                    </div><!-- picture -->
                                    <div class="posted-name">
                                        <p class="posted-p-bold">Posted by <?php echo $postedName[2]; ?></p>
                                        <p class="posted-p-date"><?php echo date('jS F Y',strtotime($datePosted[2])); ?></p>
                                    </div><!-- posted-name -->
                                </div><!-- posted-section -->
                            </div><!-- art-container -->
                        </div><!-- category block -->
                        <div class="<?php echo strtolower($category[1]); ?>-block">
                            <div class="art-box">
                                <a href="#" class="article-tooltip"><?php echo $category[1]; ?></a>
                                <div class="tooltip">
                                    <p><?php echo $tooltip[1]; ?></p>
                                    <div class="mini-arrow-down"></div>
                                </div><!-- tooltip -->
                                <div class="img-container">
                                    <img class="img" src="<?php echo $image[1]; ?>" alt="bespoke software">
                                    <div class="photo-overlay"></div>
                                </div><!-- img-container -->
                            </div><!-- art-box -->
                            <div class="art-container">
                                <div class="bot-art-sec">
                                    <h3><a href="#"><?php echo $title[1]; ?></a></h3>
                                    <p><?php echo $description[1]; ?></p>
                                    <button type="button" class="btn">Read More</button>
                                </div><!-- bot-art-sec -->
                                <div class="posted-section">
                                    <div class="picture">
                                        <img class="portrait" src="<?php echo $postedPic[1]; ?>" alt="portrait">
                                    </div><!-- picture -->
                                    <div class="posted-name">
                                        <p class="posted-p-bold">Posted by <?php echo $postedName[1]; ?></p>
                                        <p class="posted-p-date"><?php echo date('jS F Y',strtotime($datePosted[1])); ?></p>
                                    </div><!-- posted-name -->
                                </div><!-- posted-section -->
                            </div><!-- art-container -->
                        </div><!-- category block -->
                        <div class="<?php echo strtolower($category[0]); ?>-block">
                            <div class="art-box">
                                <a href="#" class="article-tooltip"><?php echo $category[0]; ?></a>
                                <div class="tooltip">
                                    <p><?php echo $tooltip[0]; ?></p>
                                    <div class="mini-arrow-down"></div>
                                </div><!-- tooltip -->
                                <div class="img-container">
                                    <img class="img" src="<?php echo $image[0]; ?>" alt="kayleigh">
                                    <div class="photo-overlay"></div>
                                </div><!-- img-container -->
                            </div><!-- art-box -->
                            <div class="art-container">
                                <div class="bot-art-sec">
                                    <h3><a href="#"><?php echo $title[0]; ?></a></h3>
                                    <p><?php echo $description[0]; ?></p>
                                    <button type="button" class="btn">Read More</button>
                                </div><!-- bot-art-sec -->
                                <div class="posted-section">
                                    <div class="picture">
                                        <img class="portrait" src="<?php echo $postedPic[0]; ?>" alt="portrait">
                                    </div><!-- posted-section -->
                                    <div class="posted-name">
                                        <p class="posted-p-bold">Posted by <?php echo $postedName[0]; ?></p>
                                        <p class="posted-p-date"><?php echo date('jS F Y',strtotime($datePosted[0])); ?></p>
                                    </div><!-- posted-name -->
                                </div><!-- posted-section -->
                            </div><!-- art-container -->
                        </div><!-- category block -->
                    </div><!-- article section background -->
                </div><!-- article section -->