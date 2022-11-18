<?php $locale = service('request')->getLocale();?>
<div class="mdui-color-deep-orange-accent mdui-text-color-white">
    <div class="mdui-toolbar">
      <div class="pc"><span class="mdui-typo-title"><?php echo lang('app.st'); ?></span></div>
      <div class="mobile mdui-hidden"><a href="javascript:;" class="mdui-btn mdui-btn-icon tri" mdui-drawer="{target:'#main-drawer', swipe: true}"><i class="mdui-icon material-icons">menu</i></a><span class="mdui-typo-title"><?php echo lang('app.st'); ?></span></div>
      <div class="mdui-toolbar-spacer"></div>
      <img src="https://miuiroms-1251747223.cos.ap-shanghai.myqcloud.com/images/logo/Logo-Str-White.png" width="170px">
      <a class="mdui-text-capitalize lang mdui-hidden" mdui-menu="{target: '#lang'}"><label><?php echo lang('app.cl'); ?>：<i class="mdui-icon material-icons">translate</i></label></a>
      <ul class="mdui-menu" id="lang">
          <li class="mdui-menu-item"><a href="<?php echo base_url();?>/zh-cn/" class="mdui-ripple">中文</a></li>
          <li class="mdui-menu-item"><a href="<?php echo base_url();?>/en-us/" class="mdui-ripple">English</a></li></ul></div>
    <div class="pc mdui-tab mdui-tab-centered">
      <a href="<?php echo base_url($locale);?>/" class="mdui-ripple mdui-text-capitalize"><i class="mdui-icon material-icons">home</i><label><?php echo lang('app.hp'); ?></label></a>
      <a href="<?php echo base_url($locale);?>/tutorial/" class="mdui-ripple mdui-text-capitalize"><i class="mdui-icon material-icons">adb</i><label><?php echo lang('app.tt'); ?></label></a>
      <a href="<?php echo base_url($locale);?>/weekly/" class="mdui-ripple mdui-text-capitalize"><i class="mdui-icon material-icons">developer_mode</i><label><?php echo lang('app.vl'); ?></label></a>
      <a href="<?php echo base_url($locale);?>/devices/" class="mdui-ripple mdui-text-capitalize"><i class="mdui-icon material-icons">devices</i><label><?php echo lang('app.dl'); ?></label></a>
      <a href="<?php echo base_url($locale);?>/recovery/" class="mdui-ripple mdui-text-capitalize"><i class="mdui-icon material-icons">usb</i><label><?php echo lang('app.rec'); ?></label></a>
      <a href="<?php echo base_url($locale);?>/tools/" class="mdui-ripple mdui-text-capitalize"><i class="mdui-icon material-icons">computer</i><label><?php echo lang('app.tools'); ?></label></a>
      <a href="<?php echo base_url($locale);?>/thanks" class="mdui-ripple mdui-text-capitalize"><i class="mdui-icon material-icons">favorites</i><label><?php echo lang('app.thks'); ?></label></a>
      <a href="<?php echo base_url($locale);?>/sitelog" class="mdui-ripple mdui-tab-active mdui-text-capitalize"><i class="mdui-icon material-icons">update</i><label><?php echo lang('app.sl'); ?></label></a>
      <a href="<?php echo base_url($locale);?>/friendly" class="mdui-ripple mdui-text-capitalize"><i class="mdui-icon material-icons">folder_special</i><label><?php echo lang('app.fl'); ?></label></a>
      <a href="<?php echo base_url($locale);?>/about" class="mdui-ripple mdui-text-capitalize"><i class="mdui-icon material-icons">perm_identity</i><label><?php echo lang('app.as'); ?></label></a></div>
    <div class="mobile mdui-hidden">
      <div class="mdui-drawer mdui-drawer-left mdui-text-color-black-text" id="main-drawer">
        <ul class="mdui-list">
          <a href="<?php echo base_url($locale);?>/"><li class="mdui-list-item"><i class="mdui-list-item-icon mdui-icon material-icons">home</i><div class="mdui-list-item-content"><?php echo lang('app.hp'); ?></div></li></a>
          <a href="<?php echo base_url($locale);?>/tutorial/"><li class="mdui-list-item"><i class="mdui-list-item-icon mdui-icon material-icons">adb</i><div class="mdui-list-item-content"><?php echo lang('app.tt'); ?></div></li></a>
          <a href="<?php echo base_url($locale);?>/weekly/"><li class="mdui-list-item"><i class="mdui-list-item-icon mdui-icon material-icons">developer_mode</i><div class="mdui-list-item-content"><?php echo lang('app.vl'); ?></div></li></a>
          <a href="<?php echo base_url($locale);?>/devices/"><li class="mdui-list-item"><i class="mdui-list-item-icon mdui-icon material-icons">devices</i><div class="mdui-list-item-content"><?php echo lang('app.dl'); ?></div></li></a>
          <a href="<?php echo base_url($locale);?>/recovery/"><li class="mdui-list-item"><i class="mdui-list-item-icon mdui-icon material-icons">usb</i><div class="mdui-list-item-content"><?php echo lang('app.rec'); ?></div></li></a>
          <a href="<?php echo base_url($locale);?>/tools/"><li class="mdui-list-item"><i class="mdui-list-item-icon mdui-icon material-icons">computer</i><div class="mdui-list-item-content"><?php echo lang('app.tools'); ?></div></li></a>
          <a href="<?php echo base_url($locale);?>/thanks"><li class="mdui-list-item"><i class="mdui-list-item-icon mdui-icon material-icons">favorites</i><div class="mdui-list-item-content"><?php echo lang('app.thks'); ?></div></li></a>
          <a href="<?php echo base_url($locale);?>/sitelog"><li class="mdui-list-item mdui-list-item-active"><i class="mdui-list-item-icon mdui-icon material-icons">update</i><div class="mdui-list-item-content"><?php echo lang('app.sl'); ?></div></li></a>
          <a href="<?php echo base_url($locale);?>/friendly"><li class="mdui-list-item"><i class="mdui-list-item-icon mdui-icon material-icons">folder_special</i><div class="mdui-list-item-content"><?php echo lang('app.fl'); ?></div></li></a>
          <a href="<?php echo base_url($locale);?>/about"><li class="mdui-list-item"><i class="mdui-list-item-icon mdui-icon material-icons">perm_identity</i><div class="mdui-list-item-content"><?php echo lang('app.as'); ?></div></li></a>
          <a class="mdui-text-capitalize" mdui-menu="{target: '#langmb'}"><li class="mdui-list-item"><i class="mdui-list-item-icon mdui-icon material-icons">translate</i><div class="mdui-list-item-content"><?php echo lang('app.cl'); ?></div></li>
          <ul class="mdui-menu mdui-text-center" id="langmb">
            <li class="mdui-menu-item"><a href="<?php echo base_url();?>/zh-cn/" class="mdui-ripple">中文</a></li>
            <li class="mdui-menu-item"><a href="<?php echo base_url();?>/en-us/" class="mdui-ripple">English</a></li></ul></a>
        </ul>
      </div>
    </div>
</div>