  <?php $locale = service('request')->getLocale();?>
  <br />
  <br />
  <br />
  <div class="pc">
    <a href="#top"><button class="mdui-fab mdui-fab-mini mdui-fab-fixed mdui-color-deep-orange-accent uparrow"><i class="mdui-icon material-icons">arrow_upward</i></button></a>
    <div class="mdui-bottom-nav mdui-bottom-nav-text-auto footer mdui-color-grey-100 ff">
      <a href="https://github.com/HegeKen" class="mdui-ripple mdui-bottom-nav-active" mdui-tooltip="{content: 'GitHub'}"><i class="mdui-icon icon-GitHub fic"></i><label>GitHub</label></a>
      <a href="https://gitlab.com/HegeKen" class="mdui-ripple mdui-bottom-nav-active" mdui-tooltip="{content: 'GitLab'}"><i class="mdui-icon icon-gitlab fic"></i><label>GitLab</label></a>
      <a href="https://weibo.com/Heliljan" class="mdui-ripple mdui-bottom-nav-active" mdui-tooltip="{content: '<?php echo lang('app.weibo'); ?>'}"><i class="mdui-icon icon-weibo fic"></i><label><?php echo lang('app.weibo'); ?></label></a>
      <a href="https://web.vip.miui.com/page/info/mio/mio/homePage?uid=311975809" class="mdui-ripple mdui-bottom-nav-active" mdui-tooltip="{content: '<?php echo lang('app.mcc'); ?>'}"><i class="mdui-icon icon-MiBBS fic"></i><label><?php echo lang('app.mcc'); ?></label></a>
      <a href="https://space.bilibili.com/19940729" class="mdui-ripple mdui-bottom-nav-active" mdui-tooltip="{content: '<?php echo lang('app.bilibili'); ?>'}"><i class="mdui-icon icon-bilibili fic"></i><label><?php echo lang('app.bilibili'); ?></label></a>
    </div>
    <div class="mdui-bottom-nav mdui-bottom-nav-text-auto footer mdui-color-grey-100 fs">
      <div class="mdui-center mdui-text-center">Copyright <i class="mdui-icon material-icons">copyright</i> 2019-2022 -- 非小米旗下网站 . Not A Xiaomi Website</div>
    </div>
  </div>
  <div class="mobile mdui-hidden">
    <a href="#top"><button class="mdui-fab mdui-fab-mini mdui-fab-fixed mdui-color-deep-orange-accent uparrow"><i class="mdui-icon material-icons">arrow_upward</i></button></a>
    <div class="mdui-bottom-nav mdui-bottom-nav-text-auto footer mdui-color-grey-100 ffm">
      <a href="<?php echo base_url($locale);?>/" class="mdui-ripple" mdui-tooltip="{content: '<?php echo lang('app.hp'); ?>'}"><i class="mdui-icon material-icons">home</i><label><?php echo lang('app.hp'); ?></label></a>
      <a href="<?php echo base_url($locale);?>/weekly/" class="mdui-ripple" mdui-tooltip="{content: '<?php echo lang('app.vl'); ?>'}"><i class="mdui-icon material-icons">developer_mode</i><label><?php echo lang('app.vl'); ?></label></a>
      <a href="<?php echo base_url($locale);?>/devices/" class="mdui-ripple" mdui-tooltip="{content: '<?php echo lang('app.dl'); ?>'}"><i class="mdui-icon material-icons">devices</i><label><?php echo lang('app.dl'); ?></label></a>
      <a href="<?php echo base_url($locale);?>/tools/" class="mdui-ripple mdui-bottom-nav-active" mdui-tooltip="{content: '<?php echo lang('app.tools'); ?>'}"><i class="mdui-icon material-icons">computer</i><label><?php echo lang('app.tools'); ?></label></a>
      <a href="<?php echo base_url($locale);?>/recovery/" class="mdui-ripple" mdui-tooltip="{content: '<?php echo lang('app.rec'); ?>'}"><i class="mdui-icon material-icons">usb</i><label><?php echo lang('app.rec'); ?></label></a>
    </div>
    <div class="mdui-bottom-nav mdui-bottom-nav-text-auto footer mdui-color-grey-100 fsm"><div class="mdui-center mdui-text-center">Copyright <i class="mdui-icon material-icons">copyright</i> 2019-2022</div></div>
    <div class="mdui-bottom-nav mdui-bottom-nav-text-auto footer mdui-color-grey-100 ftm"><br /><div class="mdui-center mdui-text-center">非小米旗下网站 . Not A Xiaomi Website</div></div>
  </div>
  <!-- Footer 代码结束 -->

</body>
<script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "4e0818275b9944a59d625e2df596aaca"}'></script>
</html>