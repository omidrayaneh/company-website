<template>
        <li class="nav-item dropdown dropdown-list" data-toggle="tooltip"
            data-title="کامنت جدید">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown" >
                <em class="icon-note orangered"></em>
                <span class="badge badge-danger" v-if="unreadNotifications.length!==0">{{unreadNotifications.length}}</span>
                <span class="badge badge-danger" v-else></span>
            </a>
            <!-- START Dropdown menu-->
            <div class="dropdown-menu dropdown-menu-right animated flipInX">
                <div class="dropdown-item">
                    <!-- START list group-->
                    <div class="list-group">
                        <!-- list item-->
                        <div class="list-group-item list-group-item-action" v-for="unreadNotification in unreadNotifications" v-if="unreadNotifications.length!==0">
                            <div class="media">
                                <div class="align-self-start mr-2">
                                    <em class="fas fa-envelope fa-2x text-warning"></em>
                                </div>
                                <div class="media-body">
                                    <p class="m-0 text-muted ">کامنت های جدید</p>
                                    <p @click="handleClick(unreadNotification)"  class="m-0 text-sm"><span>شماره تیکت :</span>{{unreadNotification.data.user.ticket_id}} </p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center alert alert-danger" style="margin-bottom:0" v-if="unreadNotifications.length===0">
                            <span class="">پیغام جدیدی ندارید</span>
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
                // csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                 csrf: '',
                unreadNotifications: this.unreads,
            }
        },
        props:['unreads','userid'],
        mounted() {

            Echo.private('App.User.' + this.userid )
                .notification((notification) => {
                    if (notification.type ==='App\\Notifications\\CommentAlert'){
                        let newUnreadNotification =  {data: {contact: notification.contact, user: notification.user}};
                        this.unreadNotifications.push(newUnreadNotification);
                    }
                });
        },
        methods: {
            handleClick(unreadNotification) {
                axios.post('/admin/markAsRead', {id: unreadNotification['id'],contactId: unreadNotification.data.user.id})
                    .then(res =>{
                        window.location.href="/admin/tickets/edit/"+unreadNotification.data.user.ticket.id;
                });
            }
        }
    }
</script>
