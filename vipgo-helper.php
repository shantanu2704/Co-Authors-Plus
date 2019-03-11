<?php
/**
 * By default co-authors will query in a sort of compatibility mode.
 * Making the SQL queries work for posts with the old author style (as in the built in post-author
 * Or by using the co-authors taxonomy.
 * To enable the following filter wp co-authors-plus create-terms-for-posts must be run on the sites.
 * Without running the backfill for terms this could lead to author's posts created before co-authors was enabled (or from an import) to not show up in that author's posts
 */
add_filter( 'coauthors_plus_should_query_post_author', '__return_false' );
