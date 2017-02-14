require 'rails_helper'

RSpec.describe "testimonials/index", type: :view do
  before(:each) do
    assign(:testimonials, [
      Testimonial.create!(
        :content => "MyText",
        :title => "Title"
      ),
      Testimonial.create!(
        :content => "MyText",
        :title => "Title"
      )
    ])
  end

  it "renders a list of testimonials" do
    render
    assert_select "tr>td", :text => "MyText".to_s, :count => 2
    assert_select "tr>td", :text => "Title".to_s, :count => 2
  end
end
