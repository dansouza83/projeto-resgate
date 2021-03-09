<div class="comments">
 <h2>Comentários</h2>
 <?php
 $args = array(
  'walker'            => null,
  'max_depth'         => '',
  'style'             => 'ul',
  'callback'          => null,
  'end-callback'      => null,
  'type'              => 'all',
  'reply_text'        => 'Responder Comentário',
  'page'              => '',
  'per_page'          => '',
  'avatar_size'       => 80,
  'reverse_top_level' => null,
  'reverse_children'  => '',
  'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
  'short_ping'        => false,   // @since 3.6
  'echo'              => true     // boolean, default is true
); ?>

 <?php wp_list_comments($args, $comments); ?>

 <?php
$form_args = array(
 'label_submit'        => 'Enviar',
 'title_replay'        => 'Escreva aqui algum comentário sobre este post',
 'comment_notes_after' => '',
 'comment_field'       => '<p class="comment-form-comment"><div class="form-group"><label for="comment">' . _x( 'Mensagem', 'noun' ) .
	'</label><textarea id="comment" name="comment" class="form-control"  rows="8" aria-required="true">' .
	'</textarea></div></p>',

);
comment_form($form_args);

 ?>
</div>
