<template>
    <div>
        <b-pagination
            :disabled="networkProcessing"
            v-model="currentPage"
            :total-rows="totalCount"
            :per-page="perPage"
        >
        </b-pagination>

        <b-table
            ref="tableQuestions"
            :current-page="currentPage"
            :per-page="perPage"
            :items="requestItems"
            :fields="fields"
            @sort-changed="sortingChanged"
        >

            <template #cell(id)="data">
               {{data.item.id}}
            </template>

            <template #cell(title)="data">
                {{data.item.title}}
            </template>

            <template #cell(view_count)="data">
                {{data.item.view_count}}
            </template>

            <template #cell(setting)="data">
                <a href="#"> <i class="fas fa-fw fa-edit"> </i> </a>
                <a href="#"> <i class="fas fa-fw fa-trash text-danger"> </i> </a>
            </template>

        </b-table>
        <b-pagination
            :disabled="networkProcessing"
            v-model="currentPage"
            :total-rows="totalCount"
            :per-page="perPage"
        >
        </b-pagination>

    </div>
</template>

<script>
import {BTable, BModal, BPagination} from 'bootstrap-vue'
export default {
    name: "HotelsListComponent",

    components: {
        BTable,
        BModal,
        BPagination
    },
    props: {
        perPage: {
            type: Number,
            required: false,
            default: function () {
                return 50;
            }
        },
        totalCount: {
            type: Number,
            required: false,
            default: function () {
                return 50;
            }
        },
        routes: {
            type: Object,
            required: false,
            default: function () {
                return {}
            }
        }
    },
    data: function () {
        return {
            processing: false,
            errors: [],
            fields: [
                {key: 'id', label: 'ID', sortable: true},
                {key: 'title', label: 'Title', sortable: true},
                {key: 'view_counr', label: 'View Count'},
                {key: 'setting', label: 'Setting', sortable: true},
            ],
            items: [],

            currentPage: 1,
            orderBy: 'id',
            orderDirection: 'asc',
            networkProcessing:false,
        }
    },
    mounted() {
    },
    methods: {
        async requestItems() {
            let params = {
                page: this.currentPage,
                orderBy: this.orderBy,
                orderDirection: this.orderDirection,
            }
            let items = [];
             await axios.post(this.routes.items, params)
                 .then(response => {
                     for (let item of response.data.items) {
                         items.push(this.getItemData(item));
                     }
                     resolve(items)
                 })
                 .catch(e => {
                     this.errors.push(e)
                 })
            return items
        },

        sortingChanged(ctx) {
            if(ctx.sortBy) {
                this.currentPage = ctx.currentPage;
                this.orderBy = ctx.sortBy;
                this.orderDirection = ctx.sortDesc ? 'desc' : 'asc';
            }
        },
        getItemData(value) {
            return {
                id: value.id,
                title: value.title,
                view_count: value.view_count,
            };
        },
    },

}
</script>

<style scoped>
.image {
    cursor: pointer;
    margin: 5px 5px 0 0;
    border-radius: 3px;
    max-width: 150px;
    height: 40px;
    object-fit: cover;
}
</style>
