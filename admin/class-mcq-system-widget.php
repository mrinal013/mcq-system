<?php
class mcq_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
        // Base ID of your widget
            'mcq_widget',
        // Widget name will appear in UI
            __('MCQ Widget', 'cw_widget_domain'),
        // Widget description
            array(
            'description' => __('MCQ show', 'mcq')
        ));
    }
    // Creating widget front-end
    // This is where the action happens
    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];
        // This is where you run the code and display the output
        $mcq_args = array(
            'post_type' => 'mcq_question',
        );
        $mcq_questions = new WP_Query($mcq_args);

        if ( $mcq_questions->have_posts() ):
            while ( $mcq_questions->have_posts() ) :
                $mcq_questions->the_post();
                the_title();
                the_ID();
                ?>
                <div class="mcqarea-wrapper" id="<?php echo 'mcq-' . get_the_ID(); ?>">
                    <span>Answer: </span>
                    <input type="text">
                </div>
                <?php         
            endwhile;
        else:
            // Insert any content or load a template for no posts found.
        endif;
        ?>
        <button class="mcq-system-button">Submit</button>
        <?php
        echo $args['after_widget'];
    }
    // Widget Backend
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('Question for you', 'mcq');
        }
      // Widget admin form
?>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Question for you:'); ?></label>
<input class="widefat" id="<?php
        echo $this->get_field_id('title');
?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /><?php
    }
    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
{
        $instance          = array();
        $instance['title'] = (!empty($new_instance['title'])) 
                              ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}