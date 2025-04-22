<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - Help Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .faq-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .faq-header {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #343a40;
        }
        .category-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            color: #007bff;
        }
        .accordion-button {
            font-weight: bold;
            color: #007bff;
        }
        .accordion-button:not(.collapsed) {
            background-color: #e9f5ff;
            color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2 class="text-center my-4">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            @foreach($faqs as $category => $questions)
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">{{ $category }}</h4>
                    </div>
                    <div class="card-body">
                        @foreach($questions as $index => $faq)
                            <div class="faq-item">
                                <div class="faq-question d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#faq{{ $loop->parent->index }}_{{ $index }}">
                                    <span>{{ $faq['question'] }}</span>
                                    <span class="arrow">&#9662;</span> 
                                </div>
                                <div id="faq{{ $loop->parent->index }}_{{ $index }}" class="faq-answer collapse">
                                    <p>{{ $faq['answer'] }}</p>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    <style>
        .faq-question {
            cursor: pointer;
            padding: 10px;
            font-weight: bold;
            background: #f8f9fa;
            border-radius: 5px;
        }
        .faq-answer {
            padding: 10px;
            display: none;
        }
        .arrow {
            transition: transform 0.3s ease;
        }
        .rotate {
            transform: rotate(180deg);
        }
    </style>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const faqItems = document.querySelectorAll(".faq-question");
            
            faqItems.forEach(item => {
                item.addEventListener("click", function () {
                    const answer = this.nextElementSibling;
                    const arrow = this.querySelector(".arrow");
    
                    if (answer.style.display === "none" || answer.style.display === "") {
                        answer.style.display = "block";
                        arrow.classList.add("rotate");
                    } else {
                        answer.style.display = "none";
                        arrow.classList.remove("rotate");
                    }
                });
            });
        });
    </script>
   <div class="button-container">
    <a href="{{ route('virtual.assistant') }}" class="btn btn-primary still-need-help-btn">Still Need Help?</a>
</div>

<style>
    .button-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px 0; /* Adjust for balanced spacing */
    }
</style>


    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
