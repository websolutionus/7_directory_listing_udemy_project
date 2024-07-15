<div class="tab-pane fade show" id="profile4" role="tabpanel" aria-labelledby="home-tab4">
    <div class="card border">
      <div class="card-body">
          <form action="{{ route("admin.stripe-settings.update") }}" method="POST">
              @csrf
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Stripe Status</label>
                          <select name="stripe_status"  class="form-control">
                            <option @selected(config('payment.stripe_status') === 'active') value="active">Active</option>
                            <option @selected(config('payment.stripe_status') === 'inactive') value="inactive">Inactive</option>
                          </select>
                      </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Stripe Country</label>
                        <select name="stripe_country"  class="form-control select2">
                          <option value="">Select</option>
                            @foreach (config('countries') as $key => $country)
                                <option @selected($key === config('payment.stripe_country')) value="{{ $key }}">{{ $country }}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Stripe Currency</label>
                          <Select name="stripe_currency" class="form-control select2">
                              <option value="">Select</option>
                              @foreach (config('currencies.currency_list') as $key => $currency)
                                  <option @selected($currency == config('payment.stripe_currency')) value="{{ $currency }}">{{ $key }} ({{ $currency }})</option>
                              @endforeach
                          </Select>
                      </div>
                  </div>

                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Stripe Currency Rate (Per {{ config('settings.site_default_currency') }})</label>
                          <input type="text" class="form-control" name="stripe_currency_rate" value="{{ config('payment.stripe_currency_rate') }}">
                      </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Stripe Publishable Key</label>
                        <input type="text" class="form-control" name="stripe_key" value="{{ config('payment.stripe_key') }}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Stripe Secret Key</label>
                        <input type="text" class="form-control" name="stripe_secret_key" value="{{ config('payment.stripe_secret_key') }}">
                    </div>
                  </div>
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
    </div>
  </div>
