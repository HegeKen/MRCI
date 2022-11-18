<br />
<br />
<div class="mdui-row mdui-center">
    <div class="mdui-col-md-3 mdui-col-offset-md-4">
        <div class="mdui-typo-display-1">注册</div>
        <br />
        <?php if (isset($validation)) : ?>
            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
        <?php endif; ?>
        <form action="/admin/register/save" method="post">
            <div class="mdui-textfield">
                <i class="mdui-icon material-icons">email</i>
                <label class="mdui-textfield-label">邮箱</label>
                <input class="mdui-textfield-input" type="email" name="email" value="<?= set_value('email') ?>" required />
                <div class="mdui-textfield-error">邮箱格式错误</div>
            </div>
            <div class="mdui-textfield">
                <i class="mdui-icon material-icons">account_circle</i>
                <label class="mdui-textfield-label">用户名</label>
                <input class="mdui-textfield-input" type="text" name="name" required />
                <div class="mdui-textfield-helper">请输入用户名</div>
            </div>
            <div class="mdui-textfield">
                <i class="mdui-icon material-icons">lock</i>
                <label class="mdui-textfield-label">密码</label>
                <input class="mdui-textfield-input" type="password" name="password" pattern="^.*(?=.{6,})(?=.*[a-z])(?=.*[A-Z]).*$" required />
                <div class="mdui-textfield-error">密码至少 6 位，且包含大小写字母</div>
                <div class="mdui-textfield-helper">请输入至少 6 位，且包含大小写字母的密码</div>
            </div>
            <div class="mdui-textfield">
                <i class="mdui-icon material-icons">lock</i>
                <label class="mdui-textfield-label">密码</label>
                <input class="mdui-textfield-input" type="password" name="confpassword" pattern="^.*(?=.{6,})(?=.*[a-z])(?=.*[A-Z]).*$" required />
                <div class="mdui-textfield-error">密码至少 6 位，且包含大小写字母</div>
                <div class="mdui-textfield-helper">请输入至少 6 位，且包含大小写字母的密码</div>
            </div>
            <br />
            <br />
            <div class="mdui-col-xs-1 mdui-col-sm-6 mdui-col-offset-md-3 mdui-text-center">
                <button type="submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-float-left">注册</button>
                <a href="/admin/login" class="mdui-btn mdui-btn-raised mdui-ripple mdui-float-right">登录</a>
            </div>
        </form>
    </div>
</div>