<div>
    <div class="content">
        <!-- List Of Anythings Table -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                    <h3 class="block-title">Recent Orders</h3>
                    <div class="block-options">
                        <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="class-toggle" data-target="#one-dashboard-search-orders" data-class="d-none">
                            <i class="fa fa-search"></i>
                        </button>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-sm btn-alt-primary" id="dropdown-recent-orders-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-flask"></i>
                            Filters
                            <i class="fa fa-angle-down ml-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right font-size-sm" aria-labelledby="dropdown-recent-orders-filters">
                            <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Pending..
                                <span class="badge badge-primary badge-pill">35</span>
                            </a>
                            <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Processing
                                <span class="badge badge-primary badge-pill">15</span>
                            </a>
                            <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                For Delivery
                                <span class="badge badge-primary badge-pill">20</span>
                            </a>
                            <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Canceled
                                <span class="badge badge-primary badge-pill">72</span>
                            </a>
                            <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Delivered
                                <span class="badge badge-primary badge-pill">890</span>
                            </a>
                            <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                All
                                <span class="badge badge-primary badge-pill">997</span>
                            </a>
                            </div>
                        </div>
                    </div>
            </div>
            <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
                    <!-- Search Form -->
                    <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                        <div class="form-group push">
                            <div class="input-group">
                            <input type="text" class="form-control" id="one-ecom-orders-search" name="one-ecom-orders-search" placeholder="Search recent orders..">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                        <i class="fa fa-search"></i>
                                </span>
                            </div>
                            </div>
                        </div>
                    </form>
                    <!-- END Search Form -->
            </div>
            <div class="block-content">
                    <!-- Recent Orders Table -->
                    <div class="table-responsive">
                        <table class="table table-borderless table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 120px;">No.</th>
                                <th class="d-none d-sm-table-cell">Code</th>
                                <th class="d-none d-xl-table-cell">Name</th>
                                <th>Status</th>
                                <th class="d-none d-xl-table-cell text-center">Regencies</th>
                                <th class="d-none d-sm-table-cell text-center">District</th>
                                <th class="d-none d-sm-table-cell text-right">Vilages</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $province)
                            <tr>
                                <td class="text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">
                                            <strong>{{$loop->iteration}}</strong>
                                        </a>
                                </td>
                                <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{$province->province_code}}</td>
                                <td class="d-none d-xl-table-cell font-size-sm">
                                        <a class="font-w600">{{$province->province_name}}</a>
                                </td>
                                <td>
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-success-light text-success">Actived</span>
                                </td>
                                <td class="d-none d-xl-table-cell text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">7</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">3%</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right font-size-sm">
                                        <strong>$26,52</strong>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END Recent Orders Table -->

                    <!-- Pagination -->
                    <nav aria-label="Photos Search Navigation">
                        <ul class="pagination pagination-sm justify-content-end mt-2">
                            <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                Prev
                            </a>
                            </li>
                            <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">4</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                Next
                            </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- END Pagination -->
            </div>
        </div>
        <!-- END -->
    </div>
</div>
