<p>Капча</p>
<p>Вопрос: <strong><?php echo $captcha['question']; ?></strong>
<p>
    Ответ:
    <input name="answer" type="text">
    <input name="captcha_id" type="hidden" value="<?php echo $captcha['id']; ?>">
</p>