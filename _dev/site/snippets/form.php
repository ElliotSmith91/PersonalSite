<form class="contact--form" method="post">
  <input type="text" name="name" placeholder="Name">
  <input type="text" name="email" placeholder="E-mail address">
  <textarea name="message" rows="8" cols="80" placeholder="Message"></textarea>
  <input type="submit" name="submit" value="Send">
  <div class="honey">
    <label for="website">If you are a human, leave this field empty</label>
    <input type="website" name="comments_notes" id="website" value="<?= isset($data['website']) ? $data['website'] : '' ?>"/>
  </div>
</form>
