<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sometype+Mono&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/google/code-prettify/master/loader/prettify.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/themes/prism.min.css">

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<head>
    <title>TESSERACT</title>
</head>
<body>
<header>
    <div class="logo">
        <img class="img-logo" src="{{ asset('assets/logo.png') }}" alt="Логотип">
    </div>
    <nav class="nav-menu">
        <a id="main-btn" class="nav-el">{{ $data->main_btn }}</a>
        <a id="about-btn" class="nav-el">{{ $data->about_btn }}</a>
        <a id="api-btn" class="nav-el">{{ $data->api_btn }}</a>
    </nav>
    <div class="language">
        @if ($data->page_lang === 'Русский')
            <div class="flag">
                <img srcset="https://img.icons8.com/?size=134&amp;id=rcIHDZzZWKJ8&amp;format=png 2x, https://img.icons8.com/?size=134&amp;id=rcIHDZzZWKJ8&amp;format=png 1x" src="https://img.icons8.com/?size=134&amp;id=rcIHDZzZWKJ8&amp;format=png 2x" alt="Russia" loading="lazy" width="25" height="25" style="width: 25px; height: 25px;" lazy="loaded">
            </div>
        @else
            <div class="flag">
                <img srcset="https://img.icons8.com/?size=96&amp;id=15532&amp;format=png 2x, https://img.icons8.com/?size=96&amp;id=15532&amp;format=png 1x" src="https://img.icons8.com/?size=96&amp;id=15532&amp;format=png 2x" alt="USA" loading="lazy" width="25" height="25" style="width: 25px; height: 25px;" lazy="loaded">
            </div>
        @endif
        <div class="lang">
            <p>{{ $data->page_lang }}</p>
        </div>
        <div class="arrow-dropdown">
            <img srcset="https://img.icons8.com/?size=100&amp;id=2760&amp;format=png&amp;color=FFFFFF 2x, https://img.icons8.com/?size=100&amp;id=2760&amp;format=png&amp;color=FFFFFF 1x" src="https://img.icons8.com/?size=100&amp;id=2760&amp;format=png&amp;color=FFFFFF 2x" alt="Expand Arrow" loading="lazy" width="15" height="15" style="width: 15px; height: 15px;" lazy="loaded">
        </div>
        <div class="language-list">
            <ul>
                <li>
                    <div class="flag">
                        <img srcset="https://img.icons8.com/?size=134&amp;id=rcIHDZzZWKJ8&amp;format=png 2x, https://img.icons8.com/?size=134&amp;id=rcIHDZzZWKJ8&amp;format=png 1x" src="https://img.icons8.com/?size=134&amp;id=rcIHDZzZWKJ8&amp;format=png 2x" alt="Russia" loading="lazy" width="25" height="25" style="width: 25px; height: 25px;" lazy="loaded">
                    </div>
                    <p><a href="/">{{ $data->lang_list_ru }}</a></p>
                </li>
                <li>
                    <div class="flag">
                        <img srcset="https://img.icons8.com/?size=96&amp;id=15532&amp;format=png 2x, https://img.icons8.com/?size=96&amp;id=15532&amp;format=png 1x" src="https://img.icons8.com/?size=96&amp;id=15532&amp;format=png 2x" alt="USA" loading="lazy" width="25" height="25" style="width: 25px; height: 25px;" lazy="loaded">
                    </div>
                    <p><a href="/en">{{ $data->lang_list_en }}</a></p>
                </li>
            </ul>
        </div>
    </div>
</header>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".language").click(function(event) {
            event.stopPropagation();
            $(".language-list").toggle();
        });

        $(document).click(function(event) {
            if (!$(event.target).closest('.language').length) {
                $(".language-list").hide();
            }
        });
    });
</script>

<section id="main">
    <div class="slide">
        <div class="particles">
            <script src="{{ asset('js/main.js') }}"></script>
        </div>
        <div class="text-container">
            <h1 class="title">
                TESSERACT
            </h1>
            <h4 class="description">
                {{ $data->title_description }}
            </h4>
            <div class="buttons-container">
                <div class="start-btn" id="start-btn">
                    <p>
                        {{ $data->start_btn }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="form">
    <div class="main-div">
        <div class="form-container">
            <form action="/upload-image" method="post" enctype="multipart/form-data" id="imageForm">
                @csrf
                <input type="file" name="image" id="imageInput" class="input">
                <div class="input-element">
                    <img class="img-input" srcset="https://img.icons8.com/?size=100&amp;id=11550&amp;format=png&amp;color=FFFFFF 2x, https://img.icons8.com/?size=100&amp;id=11550&amp;format=png&amp;color=FFFFFF 1x" src="https://img.icons8.com/?size=100&amp;id=11550&amp;format=png&amp;color=FFFFFF 2x" alt="Add File" loading="lazy" width="100" height="100" style="width: 100px; height: 100px;" lazy="loaded">
                    <img class="img-input-done" srcset="https://img.icons8.com/?size=100&amp;id=39318&amp;format=png&amp;color=FFFFFF 1x, https://img.icons8.com/?size=100&amp;id=39318&amp;format=png&amp;color=FFFFFF 2x," src="https://img.icons8.com/?size=100&amp;id=39318&amp;format=png&amp;color=FFFFFF 2x" alt="Update Done" loading="lazy" width="100" height="100" style="width: 100px; height: 100px;" lazy="loaded">
                    <div class="input-description">
                        <h1 class="file-info-title">{{ $data->input_description_h1 }}</h1>
                        <p class="file-info-desc">{{ $data->input_description_p }}</p>
                        <div id="fileInfo"></div>
                    </div>
                </div>
                <div class="change-lang">
                    <select name="language" class="select-text-lang">
                        <option value="Russian">Russian</option>
                        <option value="English">English</option>
                        <option value="Arabian">Arabian</option>
                        <option value="Chinese">Chinese</option>
                    </select>
                </div>
                <div class="form-button">
                    <button type="submit">
                        <p>{{ $data->submit_btn }}</p>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const imgImageInput = document.querySelector(".img-input");
            const imgImageInputDone = document.querySelector(".img-input-done");
            const fileInfoTitle = document.querySelector(".file-info-title");
            const fileInfoDesc = document.querySelector(".file-info-desc");

            imageInput.addEventListener("change", function() {
                const fileName = imageInput.value.split("\\").pop();
                fileInfo.textContent = `{{ $data->file_info }}: ${fileName}`;
                fileInfoTitle.textContent = `{{ $data->file_is_done_title }}`;
                fileInfoDesc.textContent = `{{ $data->file_is_done_desc }}`;
                imgImageInput.style.display = "none";
                imgImageInputDone.style.display = "block";
            });
        });
    </script>
    <script>
        document.getElementById("imageForm").addEventListener("submit", function (event) {
            event.preventDefault();

            var formData = new FormData(this);

            fetch('/upload-image', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.result === true) {
                        alert('TRUE')
                    } else {
                        alert(data.result)
                    }
                })
                .catch(error => {
                    alert(error)
                });
        });
    </script>

</section>

<section id="result">
    <div class="result-div">
        <div class="result-title">
            <h1>{{ $data->result_title }}</h1>
            <img srcset="https://img.icons8.com/?size=48&amp;id=86236&amp;format=png 2x, https://img.icons8.com/?size=48&amp;id=86236&amp;format=png 1x" src="https://img.icons8.com/?size=48&amp;id=86236&amp;format=png 2x" alt="Copy" loading="lazy" width="24" height="24" style="width: 24px; height: 24px;" lazy="loaded">
        </div>
        <div class="output">
                <textarea autofocus="" spellcheck="true" placeholder="">
                </textarea>
        </div>
    </div>
</section>

<section id="about">
    <div class="info">
        <div class="info-text">
            <h1>{{ $data->info_text }}</h1>
            <div class="line"></div>
        </div>
        <div class="info-cards">
            <div class="info-card">
                <div classs="info-img">
                    <img src="https://img2txt.com/assets/i/principle_pic_1.png">
                </div>
                <p class="card-text">
                    {{ $data->card_text1 }}
                </p>
            </div>

            <div class="info-card">
                <div classs="info-img">
                    <img src="https://img2txt.com/assets/i/principle_pic_2.png">
                </div>
                <p class="card-text">
                    {{ $data->card_text2 }}
                </p>
            </div>

            <div class="info-card">
                <div classs="info-img">
                    <img src="https://img2txt.com/assets/i/principle_pic_3.png">
                </div>
                <p class="card-text">
                    {{ $data->card_text3 }}
                </p>
            </div>

            <div class="info-card">
                <div classs="info-img">
                    <img src="https://img2txt.com/assets/i/principle_pic_4.png">
                </div>
                <p class="card-text">
                    {{ $data->card_text4 }}
                </p>
            </div>
        </div>

        <div class="about-text-container">
            <div class="about-text">
                <p>{{ $data->about_text1 }}
                    <br>
                    <br>
                    {{ $data->about_text2 }}
                    <br>
                    <br>
                    {{ $data->about_text3 }}</p>
            </div>
        </div>
    </div>
</section>

<section id="api">
    <div class="api-div">
        <div class="api-title">
            <h1>API</h1>
            <div class="line"></div>
        </div>

        <div class="api-description">
            <p>{{ $data->api_description }}</p>
        </div>

        <div class="api-code">
            <select class="select-el" name="langs">
                <option value="volvo">
                    Python</option>
                <option value="saab">PHP</option>
                <option value="mercedes">JS</option>
                <option value="audi">Java</option>
            </select>

            <div class="code">
                            <pre><code class="language-python">
    def hello_world():
        print("Hello, World!")
                                </code></pre>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/prism.min.js"></script>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="developer-link">
        Designed by <a href="https://t.me/chebupel9">@chebupel9</a>
    </div>
    <div class="up-link" id="up">
       {{ $data->up_btn }}
        <div class="up-arrow">
            <img srcset="https://img.icons8.com/?size=100&amp;id=2760&amp;format=png&amp;color=FFFFFF 2x, https://img.icons8.com/?size=100&amp;id=2760&amp;format=png&amp;color=FFFFFF 1x" src="https://img.icons8.com/?size=100&amp;id=2760&amp;format=png&amp;color=FFFFFF 2x" alt="Expand Arrow" loading="lazy" width="15" height="15" style="width: 15px; height: 15px;" lazy="loaded">
        </div>
    </div>
</footer>


<script src="{{ asset('js/select.js') }}"></script>
</body>

</html>
