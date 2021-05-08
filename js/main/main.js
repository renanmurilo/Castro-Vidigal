// Toggle Menu
let openMenu = document.querySelector('.open-menu');
let ico = document.querySelector('.hamburguer-line')
let menu = document.querySelector('.menu')

openMenu.addEventListener('click', (e) => {
    e.preventDefault();

    openMenu.classList.toggle('active')
    menu.classList.toggle('active')
})

// Get Estado e Cidade

$(document).ready(function () {

    $.getJSON('https://gist.githubusercontent.com/ografael/2037135/raw/5d31e7baaddd0d599b64c3ec04827fc244333447/estados_cidades.json', function (data) {

        var items = [];
        var options = '<option value="">escolha um estado</option>';

        $.each(data, function (key, val) {
            options += '<option value="' + val.nome + '">' + val.nome + '</option>';
        });
        $("#estados").html(options);

        $("#estados").change(function () {

            var options_cidades = '';
            var str = "";

            $("#estados option:selected").each(function () {
                str += $(this).text();
            });

            $.each(data, function (key, val) {
                if (val.nome == str) {
                    $.each(val.cidades, function (key_city, val_city) {
                        options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
                    });
                }
            });

            $("#cidades").html(options_cidades);

        }).change();

    });

});

$(document).ready(function () {
    let apolice = document.querySelector('#apolice');

    $(apolice).on('click', (e) => {
        e.preventDefault();

        $('.content__apolice').addClass('active')
        $('.inner__cotacao').addClass('active')
        $("html, body").animate({ scrollTop: 400 }, 100);
    });

    let prevStepApolice = document.querySelector('#prevStepApolice');

    $(prevStepApolice).on('click', (e) => {
        e.preventDefault();

        $('.content__apolice').removeClass('active')
        $('.inner__cotacao').removeClass('active')
        $('.content__questionario').removeClass('active')
        $('.inner__cotacao').removeClass('active')
        $("html, body").animate({ scrollTop: 0 }, 100);
    });

    let questionario = document.querySelector('#questionario');

    $(questionario).on('click', (e) => {
        e.preventDefault()

        $('.content__questionario').addClass('active')
        $('.inner__cotacao').addClass('active')
        $("html, body").animate({ scrollTop: 650 }, 100);
    });

    let nextStep = document.querySelector('#nextStep')

    $(nextStep).on('click', (e) => {
        e.preventDefault()

        $('.circle__one').removeClass('active')
        $('.circle__two').addClass('active')
        $('.form__step__one').removeClass('active')
        $('.form__step__two').addClass('active')
        $("html, body").animate({ scrollTop: 0 }, 100);
    });

    var contentThree = document.querySelector('.form__step__three');

    if (contentThree != null) {
        let nextStepTwo = document.querySelector('#nextStepTwo')

        nextStepTwo.addEventListener('click', (e) => {
            e.preventDefault()

            $('.circle__two').removeClass('active')
            $('.circle__three').addClass('active')
            $('.form__step__two').removeClass('active')
            $('.form__step__three').addClass('active')
            $("html, body").animate({ scrollTop: 0 }, 100);
        });

        let prevStepTwo = document.querySelector('#prevStepTwo')

        prevStepTwo.addEventListener('click', (e) => {
            e.preventDefault()

            $('.circle__three').removeClass('active')
            $('.circle__two').addClass('active')
            $('.form__step__three').removeClass('active')
            $('.form__step__two').addClass('active')
            $("html, body").animate({ scrollTop: 0 }, 100);
        });

        nextStepThree
    }

    // var contentFour = document.querySelector('.form__step__four');


    let nextStepThree = document.querySelector('#nextStepThree')

    $(nextStepThree).on('click', (e) => {
        e.preventDefault()

        $('.circle__three').removeClass('active')
        $('.circle__four').addClass('active')
        $('.form__step__three').removeClass('active')
        $('.form__step__four').addClass('active')
        $("html, body").animate({ scrollTop: 0 }, 100);
    });

    let prevStepThree = document.querySelector('#prevStepThree')

    $(prevStepThree).on('click', (e) => {
        e.preventDefault()

        $('.circle__four').removeClass('active')
        $('.circle__three').addClass('active')
        $('.form__step__four').removeClass('active')
        $('.form__step__three').addClass('active')
        $("html, body").animate({ scrollTop: 0 }, 100);
    });


    let prevStep = document.querySelector('#prevStep')

    $(prevStep).on('click', (e) => {
        e.preventDefault()

        $('.content__questionario').removeClass('active')
        $('.inner__cotacao').removeClass('active')
        $("html, body").animate({ scrollTop: 0 }, 100);
    });

    let prevStepOne = document.querySelector('#prevStepOne')

    $(prevStepOne).on('click', (e) => {
        e.preventDefault()

        $('.circle__two').removeClass('active')
        $('.circle__one').addClass('active')
        $('.form__step__two').removeClass('active')
        $('.form__step__one').addClass('active')
        $("html, body").animate({ scrollTop: 0 }, 100);
    });

    // Mostrar nome do arquivo tipo file

    var $input = document.getElementById('file'),
        $fileName = document.getElementById('file-name')

    if ($input != null) {
        $input.addEventListener('change', function () {
            $fileName.textContent = this.value.replace(/[\\"]/g, '').replace(/C:/g, '').replace('fakepath', '');
            $('#resetLink').addClass('active')
        });
    }

    function reset_form_element(e) {
        e.wrap('<form>').parent('form').trigger('reset');
        e.unwrap();
    }

    $('#resetLink').on('click', function (e) {
        reset_form_element($('#file'));
        $fileName.textContent = '';
        $('#resetLink').removeClass('active')
        e.preventDefault();
    });

    var $inputPlanilha = document.getElementById('fileArquive'),
        $fileArquive = document.getElementById('fileArquive-name');

    if ($inputPlanilha != null) {
        $inputPlanilha.addEventListener('change', function () {
            $fileArquive.textContent = this.value.replace(/[\\"]/g, '').replace(/C:/g, '').replace('fakepath', '');
        });
    }

    if (window.location.pathname === '/empresariais/automoveis-e-frotas/') {
        $('.inner__cotacao').css('display', 'none');
        $('.content__apolice').css('display', 'none');
        $('.content__questionario').css('display', 'flex');
        $('.content__questionario > h3').css('display', 'none');
        $('.step__view').css('display', 'none');
    }

    if (window.location.pathname === '/empresariais/transportes-internacionais/') {
        $('.inner__cotacao').css('display', 'none');
        $('.content__apolice').css('display', 'none');
        $('.content__questionario').css('display', 'flex');
        $('.content__questionario > h3').css('display', 'none');
        $('.step__view').css('display', 'none');
    }

    if (window.location.pathname === '/empresariais/educacional/') {
        $('.inner__cotacao').css('display', 'none');
        $('.content__apolice').css('display', 'none');
        $('.content__questionario').css('display', 'flex');
        $('.content__questionario > h3').css('display', 'none');
        $('.step__view').css('display', 'none');
    }

    if (window.location.pathname === '/pessoais/residencia/') {
        $('.content__questionario > h3').css('display', 'none');
    }

    if (window.location.pathname === '/pessoais/veiculos/') {
        $('.content__questionario > h3').css('display', 'none');
    }
})

$(document).ready(function () {
    $('[data-group]').each(() => {
        var $allTarget = $(this).find('[data-target]'),
            $allClick = $(this).find('[data-click]'),
            activeClass = 'active';

        $allTarget.first().addClass(activeClass)
        $allClick.first().addClass(activeClass)

        $allClick.click(function (e) {
            e.preventDefault();

            var id = $(this).data('click'),
                $target = $('[data-target="' + id + '"]');

            $allClick.removeClass(activeClass);
            $allTarget.removeClass(activeClass);

            $target.addClass(activeClass);
            $(this).addClass(activeClass)
        })
    })
});
