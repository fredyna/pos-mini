<!-- ============================================================== -->
<!-- Notifikasi -->
<!-- ============================================================== -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i data-feather="bell"></i>
        <div class="notify">
            <span class="point bg-primary"></span>
        </div>
    </a>
    <div
        class="
        dropdown-menu dropdown-menu-end
        mailbox
        dropdown-menu-animate-up dropdown-notification
        ">
        <ul class="list-style-none">
            <li>
                <div class="rounded-top p-30 pb-2 d-flex align-items-center">
                    <h3 class="card-title mb-0">Notifications</h3>
                    <span class="badge bg-warning ms-3">5 new</span>
                </div>
            </li>
            <li class="p-30 pt-0">
                <div class="message-center message-body position-relative">
                    <!-- Message -->
                    <a href="javascript:void(0)"
                        class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            border-bottom
                            py-3
                            ">
                        <span class="user-img position-relative d-inline-block">
                            <img src="{{ asset('admin/images/users/user.png') }}" alt="user"
                                class="rounded-circle w-100" />
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5 class="message-title mb-0 mt-1 fs-4 font-weight-medium">
                                Roman Joined the Team!
                            </h5>
                            <span
                                class="fs-3 text-nowrap d-block time text-truncate fw-normal mt-1 text-muted">Congratulate
                                him</span>
                        </div>
                    </a>
                </div>
                <div class="mt-4">
                    <a class="btn btn-info text-white" href="javascript:void(0);">
                        See all notifications
                    </a>
                </div>
            </li>
        </ul>
    </div>
</li>
<!-- ============================================================== -->
<!-- End Notifikasi -->
<!-- ============================================================== -->
