  <title><?php theTitle(); ?> - <?php showOption( 'name' ); ?></title>
  <div class="container">
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <section class="header">
      <?php theImage(); ?>
      <h2 class="title"><?php theTitle(); ?></h2>
      <h5>By <?php theAuthor(); ?> on <?php theDate(); ?> in <?php theCategories(); ?></h5>
    </section>

    <!-- Why use Skeleton -->
    <div class="docs-section" id="intro">
      <span class="docs-header">TAGS: <?php theTags('pill'); ?></span>
      <br>
      <article>
        <?php theContent(); ?>
      </article>
    </div>

    <!-- Forms -->
    <div class="docs-section" id="forms">
      <h6 class="docs-header">Add Comment</h6>
      <div class="docs-example docs-example-forms">
        <form>
          <div class="row">
            <div class="six columns">
              <label for="exampleEmailInput">Your email</label>
              <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
            </div>
            <div class="six columns">
              <label for="exampleEmailInput">Your Name</label>
              <input class="u-full-width" type="text" placeholder="Jane Doe" id="exampleEmailInput">
            </div>
          </div>
          <label for="exampleMessage">Comment</label>
          <textarea class="u-full-width" id="exampleMessage"></textarea>
          <input class="button-primary" type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>