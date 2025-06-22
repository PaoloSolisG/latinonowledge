<div id="pricing" class="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Our<strong class="black"> Pricing</strong></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="pricing_box">
                    <h3>Basic</h3>
                    <span>$<strong class="white_bold">40</strong></span>
                    <p>It is a long established fact that a reader will be distracted by the readable</p>
                    <a class="SelectPlan" href="#" onclick="autoSelectPlan('Basic')">Select Plan</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="pricing_box_cross">
                    <h3>Standard</h3>
                    <span>$<strong class="white_bold">50</strong></span>
                    <p>It is a long established fact that a reader will be distracted by the readable</p>
                    <a class="SelectPlan" href="#" onclick="autoSelectPlan('Standard')">Select Plan</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="pricing_box">
                    <h3>Premium</h3>
                    <span>$<strong class="white_bold">60</strong></span>
                    <p>It is a long established fact that a reader will be distracted by the readable</p>
                    <a class="SelectPlan" href="#" onclick="autoSelectPlan('Premium')">Select Plan</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        autoSelectPlan('Basic'); // Automatically select the Basic plan on page load
    });

    function autoSelectPlan(plan) {
        console.log(`Automatically selected plan: ${plan}`);
        // Add your logic here to handle the plan selection
    }
</script>
