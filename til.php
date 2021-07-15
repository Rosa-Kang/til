<!-- 07/14/2021 TodayILearn :  sore posts by title in ascending order-->

add_action('pre_get_posts', 'category_sort_by_title');
function category_sort_by_title($query)
{
    if (is_category()) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}