<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working Process - Wali Kota</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .pattern-line {
            width: 100px;
            background-image: url('img/line-pattern.png'); 
            background-size: cover; 
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            height: 100%;
        }

        .highlight-year {
            position: absolute;
            color: white;
            font-weight: bold;
            font-size: 1.5rem;
            line-height: 1.2;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        .highlight-year span {
            display: block;
        }

        .highlight-year.right {
            right: 15px;
        }

        .highlight-year.left {
            left: 15px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <section>
        <div class="bg-white text-black py-8">
            <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">
                <div class="flex flex-col w-full sticky md:top-36 lg:w-1/4 mt-2 md:mt-12 px-8">
                    <p class="ml-2 text-red-300 uppercase tracking-loose">Informasi</p>
                    <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2"> Daftar Wali Kota dan Wakil Wali Kota Semarang</p>
                </div>
                <div class="ml-0 md:ml-12 lg:w-3/4 relative">
                    <div class="pattern-line"></div>
                    <div id="timeline"></div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const waliKotaData = [
            {
                tahun: "2023 - 2026",
                periode: "Periode 1",
                nama: "Budi Santoso",
                foto: "tokoh/AhmadYani.jpeg"
            },
            {
                tahun: "2026 - 2028",
                periode: "Periode 2",
                nama: "Ahmad Prawijaya",
                foto: "img/ahmad-prawijaya.jpg"
            },
            {
                tahun: "2028 - 2030",
                periode: "Periode 3",
                nama: "Citra Maharani",
                foto: "img/citra-maharani.jpg"
            }
        ];

        const getStartYear = (yearRange) => parseInt(yearRange.split('-')[0].trim());

        const timelineContainer = document.getElementById('timeline');
        waliKotaData.forEach((item, index) => {
            const isLeft = index % 2 === 0;

            timelineContainer.innerHTML += `
                <div class="flex items-center mb-16 w-full ${isLeft ? 'flex-row-reverse' : 'flex-row'}">
                    <div class="w-5/12 ${isLeft ? 'pr-12 text-right' : 'pl-12 text-left'}">
                        <p class="text-base font-semibold text-black-200">${item.periode}</p>
                        <p class="text-sm text-black-300">Tahun ${item.tahun}</p>
                        <p class="text-sm text-black-300">Wali Kota: ${item.nama}</p>
                        <img src="${item.foto}" alt="Foto ${item.nama}" class="mt-4 rounded-lg shadow-lg w-32 h-32 object-cover mx-auto">
                    </div>

                    <div class="w-1/12 relative">
                        <div class="highlight-year ${isLeft ? 'left' : 'right'}">
                            <span>${getStartYear(item.tahun).toString().slice(0, 2)}</span>
                            <span>${getStartYear(item.tahun).toString().slice(2)}</span>
                        </div>
                    </div>

                    <div class="w-5/12"></div>
                </div>
            `;
        });
    </script>
</body>
</html>
