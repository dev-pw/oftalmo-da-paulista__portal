jQuery(document).ready(function ($) {

    /*=================================================
    CONFIGURACAO HEADER STICKY
    =================================================*/
    $(window).scroll(function () {
        if ($(window).scrollTop() > 63) {
            $('.l-header-site').addClass('sticky');
        }
        else {
            $('.l-header-site').removeClass('sticky');
        }
    });

    // $(".middle_inner").addClass("container");

    /*=================================================
    Trocando bandeiras
    =================================================*/
    let url = document.querySelector('#getUrl').getAttribute('data-url');

    $('.pt a img').attr('src', url + '/wp-content/uploads/br.png');
    $('.en a img').attr('src', url + '/wp-content/uploads/usa.png');
    $('.esp a img').attr('src', url + '/wp-content/uploads/esp.png');

    /*=================================================
    CONFIGURAÇÃO MENU RESPONSIVO
    ===================================================*/
    $('.js-nav-toggle').on('click', function () {
        $('.js-nav-menu').toggleClass('show-menu');
        $('body').toggleClass('overflow-hidden');
    });

    $('.nav-menu-principal li.menu-item-has-children > a').on('click', function () {
        $(this).toggleClass('ativo');
        $(this).next(".sub-menu").toggleClass('aberto');
    });

    $('.nav-menu-lateral li.menu-item-has-children > a').on('click', function () {
        $('.js-nav-menu').toggleClass('show-menu');
        $(this).toggleClass('ativo');
        $(this).next(".sub-menu").toggleClass('aberto');
    });

	/*=================================================
    CRIANDO BARRARS DO MENU E EFEITO HOVER 
    ===================================================*/
    let bar = document.createElement("li");
    bar.innerHTML = '<span></span>';
    bar.classList.add('mov_bar');
    bar.style.width = '64px';

    $(document).ready( ()=> {
        $('.nav-menu-principal__wrapper').append(bar);
    })

    /* Cmsmasters Moving bar */
	jQuery(document).ready(mov_bar_run);
	jQuery(window).on('resize',mov_bar_run);
	
	
	function mov_bar_run() {
		if (!jQuery('#menu-menu-principal').length) {
			return;
		}
	
		if (jQuery('#menu-menu-principal > .current-menu-ancestor').length > 0 && jQuery('#menu-menu-principal > .current-menu-item').length > 0) {
			mov_bar('#menu-menu-principal', '.current-menu-item');
		} else if (jQuery('#menu-menu-principal > .current-menu-ancestor').length > 0) {
			mov_bar('#menu-menu-principal', '.current-menu-ancestor');
		} else {
			mov_bar('#menu-menu-principal', '.current-menu-item');
		}

		function mov_bar($selector, $reaction_class) {
			
			var parent_class_li = jQuery($selector).children();
			var parent_class_li_r = jQuery($selector).children($reaction_class);
			
			setTimeout(function(){
				if (parent_class_li_r.length>0) {
					parent_class_li_r.addClass('cmsmasters_active');
					var currentleft = parent_class_li_r.position().left;
					var currentwidth = parent_class_li_r.css('width');
					var parent_class_li_mov = jQuery($selector).children('.mov_bar');
					parent_class_li_mov.css({"left":currentleft,"width":currentwidth});
				} else {
					parent_class_li.first().addClass('cmsmasters_active');
					var currentleft = jQuery($selector + ' .cmsmasters_active').position().left+"px";
					var currentwidth = jQuery($selector + ' .cmsmasters_active').css('width');
					var parent_class_li_mov = jQuery($selector).children('.mov_bar');
					parent_class_li_mov.css({"left":currentleft,"width":currentwidth});
				}
			}, 100);
			parent_class_li.hover(function() {
				parent_class_li.removeClass('cmsmasters_active');
				jQuery(this).addClass('cmsmasters_active');
				var currentleft = jQuery($selector + ' .cmsmasters_active').position().left+"px";
				var currentwidth = jQuery($selector + ' .cmsmasters_active').css('width');
				var parent_class_li_mov = jQuery($selector).children('.mov_bar');
				parent_class_li_mov.css({"left":currentleft,"width":currentwidth});					
			}, function() {
				if (parent_class_li_r.length>0) {
						parent_class_li_r.addClass('cmsmasters_active');
						var currentleft = parent_class_li_r.position().left+"px";
						var currentwidth = parent_class_li_r.css('width');
						var parent_class_li_mov = jQuery($selector).children('.mov_bar');
						parent_class_li_mov.css({"left":currentleft,"width":currentwidth});
				} else {
					parent_class_li.first().addClass('cmsmasters_active');
					var currentleft = jQuery($selector + ' .cmsmasters_active').position().left+"px";
					var currentwidth = jQuery($selector + ' .cmsmasters_active').css('width');
					var parent_class_li_mov = jQuery($selector).children('.mov_bar');
					parent_class_li_mov.css({"left":currentleft,"width":currentwidth});
				}

			} );
		}

    }


	/*=================================================
    HOVER PUBLISHER 
    ===================================================*/

		$('#eventMouse').on('mouseover', ()=>{
			$('#publisherToolTipbadge').css('visibility', 'visible');
		})

		$('#eventMouse').on('mouseout', ()=>{
			$('#publisherToolTipbadge').css('visibility', 'hidden');
		})

	/*=================================================
    MASCARA
    ===================================================*/
	var SPMaskBehavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	 },
	 spOptions = {
		onKeyPress: function (val, e, field, options) {
		   field.mask(SPMaskBehavior.apply({}, arguments), options);
		}
	 };
	 $('.tel_mask').mask(SPMaskBehavior, spOptions);
 
	 $('.cpf_mask').mask('000.000.000-00', { reverse: true });
	 $(".rg_mask").mask("00.000.000-A");
	 $(".cep_mask").mask("00000-000");
	 $(".data_mask").mask("00/00/0000");
	 $(".cartao_mask").mask("0000 0000 0000 0000");
	 $(".cvv_mask").mask("000");

	/*================================================
    PREENCHIMENTO DE ENDEREÇO AUTOMÁTICO
    =================================================*/
    // PREENCHER ENDEREÇO COM O CEP
    $(".cep_mask").blur(function () {

		if($(this).hasClass('cep_mask_res')){
		  getEndereco(
			$(this),
			$(".preencher_auto_rua_residencial"),
			$(".preencher_auto_bairro_residencial"),
			$(".preencher_auto_cidade_residencial"),
			$(".preencher_auto_estado_residencial"),
			$(".preencher_auto_numero_residencial"),
		  );
		}else if($(this).hasClass('cep_mask_com')){
		  getEndereco(
			$(this),
			$(".preencher_auto_rua_comercial"),
			$(".preencher_auto_bairro_comercial"),
			$(".preencher_auto_cidade_comercial"),
			$(".preencher_auto_estado_comercial"),
			$(".preencher_auto_numero_comercial"),
		  );
		}else{
		  getEndereco(
			$(this),
			$(".preencher_auto_rua"),
			$(".preencher_auto_bairro"),
			$(".preencher_auto_cidade"),
			$(".preencher_auto_estado"),
			$(".preencher_auto_numero"),
		  );
		}
  
	  });
  
	  function getEndereco(cep, endereco, bairro, cidade, estado, numero) {
		 // Se o campo CEP não estiver vazio
		 if (cep.val() != "") {
			cep = cep.val();
  
			$.getJSON("https://viacep.com.br/ws/" + cep + "/json/", function (result) {
  
			   if (result.logradouro != '' && result.logradouro !== undefined) {
				  endereco.val(unescape(result.logradouro));
				  bairro.val(unescape(result.bairro));
				  cidade.val(unescape(result.localidade));
				  estado.val(unescape(result.uf));
				  numero.focus();
			   }
			});
		 }
	  }


    var body = $('body');
});
