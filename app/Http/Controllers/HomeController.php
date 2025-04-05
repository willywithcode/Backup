<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::isPublished()
            ->isFeatured()
            ->orderBy('order', 'asc')
            ->latest('id')
            ->limit(6)
            ->get();

        return view('guest.business_services', compact('posts'));
    }

    public function about()
    {
        return view('guest.about');
    }

    public function services()
    {
        return view('guest.services');
    }

    public function contact()
    {
        return view('guest.contact');
    }

    public function news()
    {
        $posts = Post::isPublished()
            ->with('categories')
            ->orderBy('order', 'asc')
            ->latest('id')
            ->paginate(15);

        return view('guest.news', compact('posts'));
    }

    public function newsDetail($slug)
    {
        $post = Post::isPublished()
            ->where('slug', $slug)
            ->first();

        if (!$post) {
            abort(404);
        }

        $relatedPosts = Post::isPublished()
            ->orderBy('order', 'asc')
            ->latest('id')
            ->limit(4)
            ->get();

        return view('guest.news_detail', compact('post', 'relatedPosts'));
    }
    public function blog()
    {
        $posts = Post::isPublished()
            ->with('categories')
            ->orderBy('order', 'asc')
            ->latest('id')
            ->paginate(5);

        return view('guest.blog', compact('posts'));
    }

    public function blogDetail($slug)
    {
        $post = Post::isPublished()
            ->where('slug', $slug)
            ->first();

        if (!$post) {
            abort(404);
        }

        $relatedPosts = Post::isPublished()
            ->where('id', '!=', $post->id)
            ->orderBy('order', 'asc')
            ->latest('id')
            ->limit(4)
            ->get();

        return view('guest.blog_detail', compact('post', 'relatedPosts'));
    }

    public function serviceDetail($slug)
{
    $services = [
        'tro-ly-hanh-chinh' => [
            'title' => 'Trợ lý hành chính giấy tờ',
            'image' => 'assets/service/image1.png',
            'description' => 'Dịch vụ hỗ trợ quản lý tài liệu, lịch trình, xử lý văn bản,...',
            'features' => [
                'Lưu trữ và quản lý tài liệu',
                'Quản lý lịch trình và cuộc họp',
                'Soạn thảo và xử lý văn bản',
                'Quản lý email và liên lạc',
                'Lập báo cáo và thống kê',
            ],
            'full_description' => "Behind Office là đơn vị chuyên cung cấp dịch vụ trợ lý chuyên nghiệp, hỗ trợ doanh nghiệp và cá nhân trong việc quản lý công việc, tối ưu hóa quy trình vận hành và nâng cao hiệu suất làm việc. Với sứ mệnh giúp khách hàng giảm tải áp lực hành chính, chúng tôi mang đến đội ngũ trợ lý giàu kinh nghiệm, linh hoạt và tận tâm, sẵn sàng đồng hành trong mọi khía cạnh của công việc.

Với quy trình làm việc chuyên nghiệp, bảo mật thông tin tuyệt đối và giải pháp linh hoạt theo từng nhu cầu, Behind Office cam kết giúp khách hàng tối ưu thời gian, tập trung vào các mục tiêu quan trọng và phát triển kinh doanh bền vững. Chúng tôi không chỉ là trợ lý – mà còn là người đồng hành đáng tin cậy trên hành trình thành công của bạn!

Tại Behind Office, chúng tôi hiểu rằng thời gian là tài sản quý giá nhất của bạn. Vì vậy, chúng tôi cung cấp dịch vụ trợ lý chuyên nghiệp giúp doanh nghiệp và cá nhân tối ưu hóa công việc, giảm tải áp lực hành chính và tập trung vào các mục tiêu quan trọng."
        ],
        'tro-ly-ke-toan' => [
            'title' => 'Trợ lý kế toán công việc, booking',
            'image' => 'assets/service/image2.png',
            'description' => 'Hỗ trợ công việc tài chính kế toán cho doanh nghiệp.',
            'features' => [
                'Quản lý thu chi',
                'Lập và theo dõi hóa đơn',
                'Đối soát số liệu',
                'Quản lý công nợ',
                'Báo cáo tài chính',
            ],
            'full_description' => "Dịch vụ trợ lý kế toán của Behind Office giúp doanh nghiệp vận hành tài chính hiệu quả và chính xác. Chúng tôi cung cấp giải pháp quản lý thu chi, hóa đơn và công nợ chuyên nghiệp, giúp bạn yên tâm tập trung vào phát triển kinh doanh.

Với kinh nghiệm và chuyên môn cao, đội ngũ trợ lý của chúng tôi đảm bảo báo cáo tài chính rõ ràng, đúng thời hạn và tuân thủ quy định pháp lý. Hệ thống làm việc minh bạch, bảo mật thông tin giúp bạn quản trị tài chính an toàn, tối ưu chi phí và đạt hiệu quả cao trong vận hành kế toán hàng ngày."
        ],
        'giai-quyet-cong-viec' => [
            'title' => 'Cung cấp thông tin, giải quyết công việc khác',
            'image' => 'assets/service/image3.png',
            'description' => 'Nghiên cứu, phân tích và hỗ trợ ra quyết định.',
            'features' => [
                'Nghiên cứu và thu thập thông tin',
                'Phân tích và tổng hợp dữ liệu',
                'Đề xuất giải pháp',
                'Theo dõi và báo cáo tiến độ',
                'Hỗ trợ ra quyết định',
            ],
            'full_description' => "Chúng tôi hỗ trợ khách hàng trong việc giải quyết các công việc đặc thù bằng khả năng thu thập thông tin, phân tích dữ liệu và đề xuất giải pháp hiệu quả. Behind Office giúp bạn ra quyết định chính xác và kịp thời thông qua báo cáo rõ ràng và theo dõi tiến độ sát sao.

Dịch vụ này lý tưởng cho các doanh nghiệp cần trợ lý linh hoạt, có khả năng tiếp cận thông tin nhanh chóng, đánh giá khách quan và hỗ trợ xử lý các tình huống khẩn cấp hoặc phức tạp."
        ],
        'tro-ly-van-phong' => [
            'title' => 'Trợ lý hành chính văn phòng',
            'image' => 'assets/service/image4.png',
            'description' => 'Hỗ trợ điều phối và quản lý công việc hành chính trong văn phòng.',
            'features' => [
                'Quản lý văn phòng phẩm',
                'Sắp xếp và lưu trữ tài liệu',
                'Hỗ trợ tổ chức sự kiện',
                'Điều phối công việc',
                'Quản lý cơ sở vật chất',
            ],
            'full_description' => "Behind Office cung cấp trợ lý hành chính văn phòng tận tâm, chuyên nghiệp, giúp đảm bảo sự vận hành trơn tru và ngăn nắp trong môi trường làm việc. Từ quản lý văn phòng phẩm đến hỗ trợ tổ chức sự kiện, đội ngũ của chúng tôi giúp bạn tiết kiệm thời gian và công sức.

Dịch vụ phù hợp với doanh nghiệp cần điều phối nhiều đầu mối công việc, xử lý các vấn đề hành chính hàng ngày một cách hiệu quả, chuyên nghiệp và tiết kiệm chi phí vận hành."
        ],
        'giao-hang-van-phong' => [
            'title' => 'Giao hàng và văn phòng',
            'image' => 'assets/service/image5.png',
            'description' => 'Theo dõi đơn hàng, hỗ trợ vận chuyển và tối ưu quy trình.',
            'features' => [
                'Quản lý đơn hàng',
                'Theo dõi vận chuyển',
                'Xử lý khiếu nại',
                'Báo cáo tình trạng',
                'Tối ưu quy trình giao hàng',
            ],
            'full_description' => "Behind Office cung cấp dịch vụ trợ lý giao hàng – văn phòng giúp quản lý đơn hàng, theo dõi vận chuyển và xử lý khiếu nại một cách linh hoạt. Chúng tôi hỗ trợ từ khâu tiếp nhận đến hoàn tất đơn hàng, đảm bảo quy trình giao nhận minh bạch và hiệu quả.

Giải pháp này lý tưởng cho doanh nghiệp thương mại, bán lẻ hoặc các đơn vị cần điều phối vận hành và chăm sóc khách hàng sau bán hàng một cách đồng bộ, chuyên nghiệp."
        ],
    ];

    if (!isset($services[$slug])) {
        abort(404);
    }

    return view('guest.service_detail', ['service' => $services[$slug]]);
}

}
