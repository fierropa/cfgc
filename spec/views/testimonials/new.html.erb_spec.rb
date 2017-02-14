require 'rails_helper'

RSpec.describe "testimonials/new", type: :view do
  before(:each) do
    assign(:testimonial, Testimonial.new(
      :content => "MyText",
      :title => "MyString"
    ))
  end

  it "renders new testimonial form" do
    render

    assert_select "form[action=?][method=?]", testimonials_path, "post" do

      assert_select "textarea#testimonial_content[name=?]", "testimonial[content]"

      assert_select "input#testimonial_title[name=?]", "testimonial[title]"
    end
  end
end
