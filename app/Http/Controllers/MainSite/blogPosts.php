<?php

namespace App\Http\Controllers\MainSite;
use App\Http\Controllers\Controller;
use App\Models\Posts as ModelsPosts;
use App\Models\TagsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Posts;

class blogPosts extends Controller
{
    // blog posts
  public function blogPosts(Request $req)
  {
        if(isset($req->tag))
        {
          $querryTag=TagsModel::where('tag_name','=',$req->tag)->first();
          $post=DB::table('tbl_posts')->join('posts_tags', 'tbl_posts.post_tag_id', '=', 'posts_tags.tag_id')
          ->limit(3)->get();
          $relatedPosts=ModelsPosts::where('post_tag_id','=',$querryTag->tag_id)->paginate(10);
        }
        else{
          $post=DB::table('tbl_posts')->join('posts_tags', 'tbl_posts.post_tag_id', '=', 'posts_tags.tag_id')
          ->limit(3)->get();
          $relatedPosts=ModelsPosts::paginate(10);
        }
        

        
        // common
        $AllPosts=ModelsPosts::get();
        $postsCount=array();
        $tags=TagsModel::limit(10)->get();
        foreach ($tags as $key => $item) {
          $count=ModelsPosts::where("post_tag_id",'=',$item->tag_id)->get()->count();
            array_push($postsCount,$count);
        }
  
      return view('MainSite2.BlogPosts.AllBlogs',compact('post','postsCount','tags','relatedPosts','AllPosts'));
  }
  public function postDetailsPage($id)
  {
   
    $post=DB::table('tbl_posts')->join('posts_tags', 'tbl_posts.post_tag_id', '=', 'posts_tags.tag_id')
    ->where('post_id',"=",$id)->first();  
   
        $relatedPosts=ModelsPosts::where("post_tag_id",'=',$post->post_tag_id)->inRandomOrder()->limit(3)->get();
         $latestPost=ModelsPosts::orderBy('post_id','desc')->limit(3)->get();
         
        
       
        

        
        // common
        $AllPosts=ModelsPosts::get();
        $postsCount=array();
        $tags=TagsModel::limit(10)->get();
        foreach ($tags as $key => $item) {
          $count=ModelsPosts::where("post_tag_id",'=',$item->tag_id)->get()->count();
            array_push($postsCount,$count);
        }
  
      return view('MainSite2.BlogPosts.blogs',compact('latestPost','post','postsCount','tags','relatedPosts','AllPosts'));
  }
}
