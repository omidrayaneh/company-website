<template>
        <li class="nav-item dropdown dropdown-list">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown">
            <em class="icon-bell"></em>
            <span class="badge badge-danger" v-if="unreads.length!==0">{{unreads.length}}</span>
            <span class="badge badge-danger" v-else></span>
        </a>
        <!-- START Dropdown menu-->
        <div class="dropdown-menu dropdown-menu-right animated flipInX">
            <div class="dropdown-item">
                <!-- START list group-->
                <div class="list-group">
                    <!-- list item-->
                    <div class="list-group-item list-group-item-action" v-for="unread in unreads" v-if="unreads.length!==0">
                        <div class="media">
                            <div class="align-self-start mr-2">
                                <em class="fas fa-envelope fa-2x text-warning"></em>
                            </div>
                            <div class="media-body">
                                <p class="m-0 text-muted ">ایمیل های جدید</p>
                                <p class="m-0 text-sm">از طرف :  {{unread.data.user.name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action" v-else>
                        <div class="media">
                            <div class="align-self-start mr-2">
                                <em class=""></em>
                            </div>
                            <div class="media-body text-center orangered">
                                <p class="m-0">پیغام جدیدی ندارید</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END list group-->
            </div>
        </div>
        <!-- END Dropdown menu-->
    </li>
</template>

<script>
    export default {
        data(){
            return{
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                unreadNotifications: this.unreads
            }
        },
        props:['unreads'],
        mounted() {
            Echo.private('contact-channel' )
                .notification((notification) => {
                    let newUnreadNotification = {data: {order: notification.order, user: notification.user}};
                    this.unreadNotifications.push(newUnreadNotification);
                });
        },
    }
</script>
