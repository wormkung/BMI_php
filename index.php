<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <section class="bg-white ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl ">ดัชนีมวลกาย <mark class="px-2 text-white bg-red-600 rounded ">BMI</mark>
                    <p class="text-lg font-normal text-gray-500 lg:text-xl  mt-8">ค่าดัชนีมวลกาย (BMI : Body Mass Index) เป็นข้อมูลดัชนีทางคณิตศาตร์ ที่ใช้การวัดจากน้ำหนัก (Weight) และส่วนสูง (Height) มาคำนวณค่า BMIเพื่อหาค่าผลลัพธ์ของปริมาณไขมันทั้งหมด</p>
                    <section class="bg-gray-50 ">
                        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                            <div class="w-full p-6 bg-white rounded-lg shadow  sm:p-8">
                                <?php if (isset($_SESSION['red'])) { ?>
                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
                                        <?php
                                        echo $_SESSION['red'];
                                        unset($_SESSION['red']);
                                        ?>
                                    </div>
                                <?php } ?>
                                <?php if (isset($_SESSION['green'])) { ?>
                                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 " role="alert">
                                        <?php
                                        echo $_SESSION['green'];
                                        unset($_SESSION['green']);
                                        ?>
                                    </div>
                                <?php } ?>
                                <?php if (isset($_SESSION['yellow'])) { ?>
                                    <div class="p-4 mb-4 text-sm text-dark-800 rounded-lg bg-yellow-50 " role="alert">
                                        <?php
                                        echo $_SESSION['yellow'];
                                        unset($_SESSION['yellow']);
                                        ?>
                                    </div>
                                <?php } ?>
                                <?php if (isset($_SESSION['yellow2'])) { ?>
                                    <div class="p-4 mb-4 text-sm text-dark-800 rounded-lg bg-yellow-100 " role="alert">
                                        <?php
                                        echo $_SESSION['yellow2'];
                                        unset($_SESSION['yellow2']);
                                        ?>
                                    </div>
                                <?php } ?>
                                <?php if (isset($_SESSION['yellow3'])) { ?>
                                    <div class="p-4 mb-4 text-sm text-dark-800 rounded-lg bg-yellow-200 " role="alert">
                                        <?php
                                        echo $_SESSION['yellow3'];
                                        unset($_SESSION['yellow3']);
                                        ?>
                                    </div>
                                <?php } ?>
                                <?php if (isset($_SESSION['error'])) { ?>
                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-200 " role="alert">
                                        <?php
                                        echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                        ?>
                                    </div>
                                <?php } ?>

                                <form class=" grid justify-center mt-4 space-y-4 lg:mt-5 md:space-y-5" action="config.php" method="post">
                                    <label for="weight" class=" mb-2 text-lg font-medium text-gray-900 ">น้ำหนัก (กิโลกรัม)</label>
                                    <input type="number" min="0" max="200" maxlength="3" name="weight" value="0" id="weight" class=" bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required>
                                    <label for="height" class="block mb-2 text-lg font-medium text-gray-900">ส่วนสูง (เซนติเมตร)</label>
                                    <input type="number" name="height" min="0" max="250" maxlength="3" value="0" id="height" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required>
                                    <button type="submit" name="sub" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">คำนวณค่าดัชนีมวลกาย</button>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>
<script>
    document.querySelectorAll('input[type="number"]').forEach(input => {
        input.oninput = () => {
            if (input.value.length > input.maxlength) input.value = input.value.slice(0, input.maxlength);
        };
    });
</script>